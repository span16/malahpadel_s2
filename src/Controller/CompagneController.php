<?php

namespace App\Controller;

use App\Entity\Compagne;
use App\Form\CompagneType;
use App\Repository\CompagneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\Recipient\Recipient;
use Symfony\Component\Notifier\NotifierInterface;

#[Route('/compagne')]
class CompagneController extends AbstractController
{#[Route('/', name: 'app_compagne_index', methods: ['GET', 'POST'])]
    public function index(Request $request, CompagneRepository $compagneRepository): Response
    {
        $filters = [
            'status' => $request->query->get('status'),
            'type' => $request->query->get('type'),
            'search' => $request->query->get('search'),
            'sort' => $request->query->get('sort', 'tarif_desc')
        ];
        
        $compagnes = $compagneRepository->findByFilters($filters);
        
        if ($request->isXmlHttpRequest()) {
            $html = $this->renderView('compagne/_campaign_list.html.twig', [
                'compagnes' => $compagnes
            ]);
            
            return new JsonResponse([
                'html' => $html,
                'count' => count($compagnes)
            ]);
        }
        
        return $this->render('compagne/index.html.twig', [
            'compagnes' => $compagnes,
            'current_filters' => $filters
        ]);
    }

    #[Route('/new', name: 'app_compagne_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger, \App\SmsBundle\Service\SmsSender $smsSender ): Response
    {
        $compagne = new Compagne();
        $form = $this->createForm(CompagneType::class, $compagne);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du logo
            $logoFile = $form->get('logoCompagne')->getData();
            if ($logoFile) {
                $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$logoFile->guessExtension();
    
                try {
                    $logoFile->move(
                        $this->getParameter('logos_directory'),
                        $newFilename
                    );
                    $compagne->setLogoCompagne($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du logo');
                }
            } else {
                $compagne->setLogoCompagne('default-logo.png');
            }
    
            $entityManager->persist($compagne);
            $entityManager->flush();
    
            // Envoi SMS via le Bundle
            try {
                $smsSender->send(
                    "🌟 Campagne ajoutée avec succès!\n" .
                    "Nom: " . $compagne->getNomSponsor() . "\n" .
                    "ID: " . $compagne->getIdCompagne() . "\n" .
                    "Veuillez faire une visite!",
                    '+21693030489'
                );
                
                $this->addFlash('success', 'Campagne créée avec notification SMS');
            } catch (\Exception $e) {
                $this->addFlash('warning', 'Campagne créée mais échec d\'envoi SMS');
            }
    
            return $this->redirectToRoute('app_compagne_index');
        }
    
        return $this->render('compagne/new.html.twig', [
            'compagne' => $compagne,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idCompagne}', name: 'app_compagne_show', methods: ['GET'])]
    public function show(int $idCompagne, CompagneRepository $compagneRepository): Response
    {
        $compagne = $compagneRepository->find($idCompagne);
    
        if (!$compagne) {
            throw $this->createNotFoundException('Campagne non trouvée');
        }
    
        return $this->render('compagne/show.html.twig', [
            'compagne' => $compagne,
        ]);
    }
    #[Route('/{idCompagne}/edit', name: 'app_compagne_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $idCompagne, EntityManagerInterface $entityManager, SluggerInterface $slugger, CompagneRepository $compagneRepository): Response
    {
        $compagne = $compagneRepository->find($idCompagne);
        
        if (!$compagne) {
            throw $this->createNotFoundException('Campagne non trouvée');
        }
        
        $oldLogo = $compagne->getLogoCompagne();
        $form = $this->createForm(CompagneType::class, $compagne);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $logoFile = $form->get('logoCompagne')->getData();
            
            if ($logoFile) {
                $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$logoFile->guessExtension();
    
                try {
                    $logoFile->move(
                        $this->getParameter('logos_directory'),
                        $newFilename
                    );
                    $compagne->setLogoCompagne($newFilename);
                    
                    if ($oldLogo && $oldLogo !== 'default-logo.png') {
                        unlink($this->getParameter('logos_directory').'/'.$oldLogo);
                    }
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du logo');
                }
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'Campagne mise à jour avec succès');
            return $this->redirectToRoute('app_compagne_index');
        }
    
        return $this->render('compagne/edit.html.twig', [
            'compagne' => $compagne,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idCompagne}', name: 'app_compagne_delete', methods: ['POST'])]
public function delete(Request $request, int $idCompagne, CompagneRepository $compagneRepository, EntityManagerInterface $entityManager): Response
{
    $compagne = $compagneRepository->find($idCompagne);

    if (!$compagne) {
        throw $this->createNotFoundException('Campagne non trouvée');
    }

    if ($this->isCsrfTokenValid('delete'.$compagne->getIdCompagne(), $request->request->get('_token'))) {
        $entityManager->remove($compagne);
        $entityManager->flush();
        $this->addFlash('success', 'Campagne supprimée avec succès');
    }

    return $this->redirectToRoute('app_compagne_index');
}

    #[Route('/admin/campagnes', name: 'admin_compagne_index', methods: ['GET'])]
    public function indexBackOffice(CompagneRepository $compagneRepository): Response
    {
        $campagnes = $compagneRepository->findAll();
        $totalCompagnes = count($campagnes);

        return $this->render('back/compagneback.html.twig', [
            'campagnes' => $campagnes,
            'form' => null,
            'form_title' => 'Liste des campagnes',
            'button_label' => null,
            'total_compagnes' => $totalCompagnes,
        ]);
    }

    #[Route('/admin/campagne/new', name: 'admin_compagne_new', methods: ['GET', 'POST'])]
    public function newBackOffice(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger, CompagneRepository $compagneRepository, \App\SmsBundle\Service\SmsSender $smsSender): Response
    {
        $compagne = new Compagne();
        $form = $this->createForm(CompagneType::class, $compagne);
        $form->handleRequest($request);
    
        $campagnes = $compagneRepository->findAll();
        $totalCompagnes = count($campagnes);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du logo (identique à la méthode new())
            $logoFile = $form->get('logoCompagne')->getData();
            if ($logoFile) {
                $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$logoFile->guessExtension();
    
                try {
                    $logoFile->move(
                        $this->getParameter('logos_directory'),
                        $newFilename
                    );
                    $compagne->setLogoCompagne($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du logo');
                }
            } else {
                $compagne->setLogoCompagne('default-logo.png');
            }
    
            $entityManager->persist($compagne);
            $entityManager->flush();
    
            // Envoi SMS spécifique admin
            try {
                $smsSender->send(
                    "🚨 [ADMIN] Nouvelle campagne!\n" .
                    "ID: " . $compagne->getIdCompagne() . "\n" .
                    "Créée le: " . date('d/m/Y H:i'),
                    '+21693030489'
                );
                $this->addFlash('success', 'Campagne admin créée avec notification');
            } catch (\Exception $e) {
                $this->addFlash('warning', 'Campagne créée mais SMS admin non envoyé');
            }
    
            return $this->redirectToRoute('admin_compagne_index');
        }
    
        return $this->render('back/compagneback.html.twig', [
            'form' => $form->createView(),
            'campagnes' => $campagnes,
            'form_title' => 'Ajouter une campagne',
            'button_label' => 'Enregistrer',
            'total_compagnes' => $totalCompagnes,
        ]);
    }

    #[Route('/admin/edit/{idCompagne}', name: 'admin_compagne_edit', methods: ['GET', 'POST'])]
    public function editBackOffice(
        int $idCompagne,
        Request $request,
        CompagneRepository $compagneRepository,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $compagne = $compagneRepository->find($idCompagne);
    
        if (!$compagne) {
            throw $this->createNotFoundException('Campagne introuvable.');
        }
    
        $oldLogo = $compagne->getLogoCompagne();
        $form = $this->createForm(CompagneType::class, $compagne);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $logoFile = $form->get('logoCompagne')->getData();
            
            if ($logoFile) {
                $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$logoFile->guessExtension();
    
                try {
                    $logoFile->move(
                        $this->getParameter('logos_directory'),
                        $newFilename
                    );
                    $compagne->setLogoCompagne($newFilename);
    
                    if ($oldLogo && $oldLogo !== 'default-logo.png') {
                        unlink($this->getParameter('logos_directory').'/'.$oldLogo);
                    }
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du logo');
                }
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'Campagne mise à jour avec succès');
            return $this->redirectToRoute('admin_compagne_index');
        }
    
        return $this->render('back/compagneback.html.twig', [
            'form' => $form->createView(),
            'campagnes' => null,
            'form_title' => 'Modifier une campagne',
            'button_label' => 'Mettre à jour',
            'total_compagnes' => 0,
        ]);
    }

    #[Route('/admin/delete/{idCompagne}', name: 'admin_compagne_delete', methods: ['POST'])]
    public function deleteBackOffice(
        int $idCompagne,
        Request $request,
        EntityManagerInterface $entityManager,
        CompagneRepository $compagneRepository
    ): Response {
        $compagne = $compagneRepository->find($idCompagne);
    
        if (!$compagne) {
            throw $this->createNotFoundException('Campagne introuvable.');
        }
    
        if ($this->isCsrfTokenValid('delete'.$compagne->getIdCompagne(), $request->request->get('_token'))) {
            $logo = $compagne->getLogoCompagne();
            if ($logo && $logo !== 'default-logo.png') {
                unlink($this->getParameter('logos_directory').'/'.$logo);
            }
            $entityManager->remove($compagne);
            $entityManager->flush();
            $this->addFlash('success', 'Campagne supprimée avec succès');
        }
    
        return $this->redirectToRoute('admin_compagne_index');
    }
}