<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;


#[Route('/produit')]
class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository, Request $request): Response
    {
        // Récupération du paramètre de tri
        $sort = $request->query->get('sort', 'prix_desc');
        
        // Tri des produits selon le paramètre
        if ($sort === 'prix_asc') {
            $produits = $produitRepository->findBy([], ['prix' => 'ASC']);
        } else {
            $produits = $produitRepository->findBy([], ['prix' => 'DESC']);
        }

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProduitRepository $produitRepository, SluggerInterface $slugger): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image_produit')->getData();
            
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('produits_directory'),
                        $newFilename
                    );
                    $produit->setImageProduit($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                }
            }

            $produitRepository->save($produit, true);
            $this->addFlash('success', 'Produit créé avec succès');
            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/{id_produit}', name: 'app_produit_show', methods: ['GET'])]
    public function show(
        int $id_produit,
        ProduitRepository $produitRepository,
        Request $request,
        ChartBuilderInterface $chartBuilder
    ): Response {
        $produit = $produitRepository->find($id_produit);
        
        if (!$produit) {
            throw $this->createNotFoundException('Produit introuvable.');
        }

        // Récupération des notes depuis la session
        $session = $request->getSession();
        $ratings = $session->get('product_ratings', []);

        // Préparation des données pour le graphique
        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $chart->setData([
            'labels' => ['⭐', '⭐⭐', '⭐⭐⭐', '⭐⭐⭐⭐', '⭐⭐⭐⭐⭐'],
            'datasets' => [
                [
                    'label' => 'Notes',
                    'data' => [10, 15, 30, 25, 20], // Exemple de données
                    'backgroundColor' => '#4BC0C0',
                ],
            ],
        ]);

        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
            'chart' => $chart,
        ]);
    }

    #[Route('/{id_produit}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
public function edit(int $id_produit,Request $request, ProduitRepository $produitRepository,EntityManagerInterface $entityManager,SluggerInterface $slugger
): Response {
    $produit = $produitRepository->find($id_produit);

    if (!$produit) {
        throw $this->createNotFoundException('Produit introuvable.');
    }

    $form = $this->createForm(ProduitType::class, $produit);
    $form->handleRequest($request);
    $oldImage = $produit->getImageProduit();

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image_produit')->getData();

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

            try {
                $imageFile->move(
                    $this->getParameter('produits_directory'),
                    $newFilename
                );
                $produit->setImageProduit($newFilename);

                if ($oldImage && file_exists($this->getParameter('produits_directory').'/'.$oldImage)) {
                    unlink($this->getParameter('produits_directory').'/'.$oldImage);
                }
            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
            }
        } else {
            $produit->setImageProduit($oldImage);
        }

        $entityManager->flush();
        $this->addFlash('success', 'Produit mis à jour avec succès');
        return $this->redirectToRoute('app_produit_index');
    }

    return $this->render('produit/edit.html.twig', [
        'produit' => $produit,
        'form' => $form->createView(),
    ]);
}

#[Route('/{id_produit}', name: 'app_produit_delete', methods: ['POST'])]
public function delete(
    int $id_produit,
    Request $request,
    ProduitRepository $produitRepository,
    EntityManagerInterface $entityManager
): Response {
    $produit = $produitRepository->find($id_produit);

    if (!$produit) {
        $this->addFlash('error', 'Produit introuvable.');
        return $this->redirectToRoute('app_produit_index');
    }

    if ($this->isCsrfTokenValid('delete'.$produit->getIdProduit(), $request->request->get('_token'))) {
        $image = $produit->getImageProduit();

        if ($image && file_exists($this->getParameter('produits_directory').'/'.$image)) {
            unlink($this->getParameter('produits_directory').'/'.$image);
        }

        $entityManager->remove($produit);
        $entityManager->flush();
        $this->addFlash('success', 'Produit supprimé avec succès');
    } else {
        $this->addFlash('error', 'Token CSRF invalide');
    }

    return $this->redirectToRoute('app_produit_index');
}

   
    #[Route('/admin/produit/new', name: 'admin_produit_new')]
    public function newBackOffice(Request $request, ProduitRepository $produitRepository, SluggerInterface $slugger): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
    
        $produits = $produitRepository->findAll();
        $totalProduits = count($produits); // Calculer le total ici aussi
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image_produit')->getData();
            
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
    
                try {
                    $imageFile->move(
                        $this->getParameter('produits_directory'),
                        $newFilename
                    );
                    $produit->setImageProduit($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                }
            }
    
            $produitRepository->save($produit, true);
            $this->addFlash('success', 'Produit créé avec succès');
            return $this->redirectToRoute('admin_produit_index');
        }
    
        return $this->render('back/produitback.html.twig', [
            'form' => $form->createView(),
            'produits' => $produits,
            'form_title' => 'Ajouter un produit',
            'button_label' => 'Enregistrer',
            'total_produits' => $totalProduits, // Ajouter total_produits
        ]);
    }

    #[Route('/admin/produits', name: 'admin_produit_index', methods: ['GET'])]
    public function indexBackOffice(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findAll();
        $totalProduits = count($produits);

        return $this->render('back/produitback.html.twig', [
            'produits' => $produits,
            'form' => null,
            'form_title' => 'Liste des produits',
            'button_label' => null,
            'total_produits' => $totalProduits,
        ]);
    }

    #[Route('/admin/edit/{id_produit}', name: 'admin_produit_edit', methods: ['GET', 'POST'])]
    public function editBackOffice(
        int $id_produit,
        Request $request,
        ProduitRepository $produitRepository,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        // 🔍 Charger manuellement le produit
        $produit = $produitRepository->find($id_produit);
    
        if (!$produit) {
            throw $this->createNotFoundException('Produit introuvable.');
        }
    
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
        $oldImage = $produit->getImageProduit();
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image_produit')->getData();
    
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
    
                try {
                    $imageFile->move(
                        $this->getParameter('produits_directory'),
                        $newFilename
                    );
                    $produit->setImageProduit($newFilename);
    
                    if ($oldImage) {
                        unlink($this->getParameter('produits_directory').'/'.$oldImage);
                    }
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image');
                }
            } else {
                $produit->setImageProduit($oldImage);
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'Produit mis à jour avec succès');
            return $this->redirectToRoute('admin_produit_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('back/produitback.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
            'form_title' => 'Modifier un produit',
            'button_label' => 'Mettre à jour',
            'produits' => null,
            'total_produits' => 0,
        ]);
    }
    
    #[Route('/admin/delete/{id_produit}', name: 'app_produit_delete2', methods: ['POST'])]
    public function delete2(
        int $id_produit,
        Request $request,
        ProduitRepository $produitRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $produit = $produitRepository->find($id_produit);
    
        if (!$produit) {
            $this->addFlash('error', 'Produit introuvable.');
            return $this->redirectToRoute('admin_produit_index');
        }
    
        if ($this->isCsrfTokenValid('delete'.$produit->getIdProduit(), $request->request->get('_token'))) {
            $image = $produit->getImageProduit();
    
            if ($image && file_exists($this->getParameter('produits_directory').'/'.$image)) {
                unlink($this->getParameter('produits_directory').'/'.$image);
            }
    
            $entityManager->remove($produit);
            $entityManager->flush();
    
            $this->addFlash('success', 'Produit supprimé avec succès');
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }
    
        return $this->redirectToRoute('admin_produit_index');
    }
    #[Route('/produit/{id}/rating', name: 'app_produit_rating')]
public function showRatingChart(ChartBuilderInterface $chartBuilder): Response
{
    // Données de notation (exemple)
    $chart = $chartBuilder->createChart(Chart::TYPE_BAR); // ou TYPE_PIE
    $chart->setData([
        'labels' => ['⭐', '⭐⭐', '⭐⭐⭐', '⭐⭐⭐⭐', '⭐⭐⭐⭐⭐'],
        'datasets' => [
            [
                'label' => 'Votes',
                'data' => [5, 10, 15, 20, 25], // Remplacez par vos données
                'backgroundColor' => '#4BC0C0',
            ],
        ],
    ]);

    return $this->render('produit/rating.html.twig', [
        'chart' => $chart,
    ]);
}
#[Route('/{id_produit}/rate/{score}', name: 'app_produit_rate', methods: ['GET'])]
public function rateProduct(
    int $id_produit,
    int $score,
    Request $request,
    ProduitRepository $produitRepository
): Response {
    $produit = $produitRepository->find($id_produit);
    if (!$produit) {
        throw $this->createNotFoundException('Produit introuvable.');
    }

    $session = $request->getSession();
    $ratings = $session->get('product_ratings', []);

    // Enregistre la note pour ce produit
    $ratings[$id_produit] = $score;
    $session->set('product_ratings', $ratings);

    $this->addFlash('success', 'Merci pour votre note !');
    return $this->redirectToRoute('app_produit_show', ['id_produit' => $id_produit]);
}


}