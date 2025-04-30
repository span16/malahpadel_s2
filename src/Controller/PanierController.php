<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier_index')]
    public function index(SessionInterface $session, ProduitRepository $produitRepository): Response
    {
        $panier = $session->get('panier', []);
        
        $panierData = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            $produit = $produitRepository->find($id);
            if ($produit) {
                $panierData[] = [
                    'produit' => $produit,
                    'quantite' => $quantite,
                    'sousTotal' => $produit->getPrix() * $quantite
                ];
                $total += $produit->getPrix() * $quantite;
            }
        }

        return $this->render('panier/index.html.twig', [
            'items' => $panierData,
            'total' => $total
        ]);
    }

    #[Route('/panier/add/{id}', name: 'app_panier_add')]
    public function add($id, Request $request, SessionInterface $session, 
                       EntityManagerInterface $em, ProduitRepository $produitRepo): Response
    {
        $produit = $produitRepo->find($id);
        
        if (!$produit) {
            $this->addFlash('error', 'Produit introuvable');
            return $this->redirectToRoute('app_produit_index');
        }

        if ($produit->getStock() <= 0) {
            $this->addFlash('warning', 'Ce produit est en rupture de stock');
            return $this->redirectToRoute('app_produit_index');
        }

        $panier = $session->get('panier', []);
        $quantiteDemandee = 1;

        if (($panier[$id] ?? 0) + $quantiteDemandee > $produit->getStock()) {
            $this->addFlash('warning', 'Quantité demandée non disponible en stock');
            return $this->redirectToRoute('app_produit_index');
        }

        $panier[$id] = ($panier[$id] ?? 0) + $quantiteDemandee;
        $produit->setStock($produit->getStock() - $quantiteDemandee);
        
        $em->persist($produit);
        $em->flush();
        
        $session->set('panier', $panier);
        $this->addFlash('success', 'Produit ajouté au panier');

        return $this->redirect($request->headers->get('referer') ?? $this->generateUrl('app_panier_index'));
    }

    #[Route('/panier/remove/{id}', name: 'app_panier_remove')]
    public function remove($id, SessionInterface $session, 
                          EntityManagerInterface $em, ProduitRepository $produitRepo): Response
    {
        $produit = $produitRepo->find($id);
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--;
                $produit->setStock($produit->getStock() + 1);
            } else {
                unset($panier[$id]);
                $produit->setStock($produit->getStock() + 1);
            }
            
            $em->persist($produit);
            $em->flush();
        }

        $session->set('panier', $panier);
        $this->addFlash('success', 'Produit retiré du panier');

        return $this->redirectToRoute('app_panier_index');
    }

    #[Route('/panier/remove-all/{id}', name: 'app_panier_remove_all')]
    public function removeAll($id, SessionInterface $session, 
                            EntityManagerInterface $em, ProduitRepository $produitRepo): Response
    {
        $produit = $produitRepo->find($id);
        $panier = $session->get('panier', []);
        
        if (!empty($panier[$id])) {
            $quantite = $panier[$id];
            $produit->setStock($produit->getStock() + $quantite);
            $em->persist($produit);
            $em->flush();
            
            unset($panier[$id]);
        }

        $session->set('panier', $panier);
        $this->addFlash('success', 'Produit retiré du panier');
        
        return $this->redirectToRoute('app_panier_index');
    }

    #[Route('/panier/clear', name: 'app_panier_clear')]
    public function clear(SessionInterface $session, 
                         EntityManagerInterface $em, ProduitRepository $produitRepo): Response
    {
        $panier = $session->get('panier', []);
        
        foreach ($panier as $id => $quantite) {
            $produit = $produitRepo->find($id);
            if ($produit) {
                $produit->setStock($produit->getStock() + $quantite);
                $em->persist($produit);
            }
        }
        
        $em->flush();
        $session->remove('panier');
        $this->addFlash('success', 'Le panier a été vidé');
        
        return $this->redirectToRoute('app_panier_index');
    }

    #[Route('/checkout', name: 'app_checkout')]
    public function checkout(SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);
        
        if (empty($panier)) {
            $this->addFlash('warning', 'Votre panier est vide');
            return $this->redirectToRoute('app_panier_index');
        }
        
        return $this->render('panier/checkout.html.twig');
    }
}