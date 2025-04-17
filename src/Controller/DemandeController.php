<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\AnnonceMatch;
use App\Entity\Invitation;
use App\Form\DemandeType;
use App\Repository\DemandeRepository;
use App\Repository\AnnonceMatchRepository;
use App\Repository\InvitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/demande')]
class DemandeController extends AbstractController
{
    #[Route('/new/{annonceId}', name: 'app_demande_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, int $annonceId, AnnonceMatchRepository $annonceMatchRepository, EntityManagerInterface $entityManager): Response
    {
        $annonce = $annonceMatchRepository->find($annonceId);
        
        if (!$annonce) {
            throw $this->createNotFoundException('Annonce non trouvée');
        }

        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour faire une demande.');
            return $this->redirectToRoute('app_login');
        }

        $demande = new Demande();
        $demande->setAnnonce($annonce);
        $demande->setDemandeur($user);

        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($demande);
            $entityManager->flush();

            $this->addFlash('success', 'Votre demande a été envoyée avec succès.');
            return $this->redirectToRoute('app_annonce_match_index');
        }

        return $this->render('demande/new.html.twig', [
            'demande' => $demande,
            'form' => $form,
            'annonce' => $annonce,
        ]);
    }

    #[Route('/repertoire', name: 'app_demande_repertoire', methods: ['GET'])]
    public function repertoire(DemandeRepository $demandeRepository, InvitationRepository $invitationRepository): Response
    {
        $user = $this->getUser();
        $demandes = [];
        $invitations = [];
        
        if ($user) {
            $demandes = $demandeRepository->findByAnnonceOwner($user);
            $invitations = $invitationRepository->findByReceiverEmail($user->getEmail());
        }

        return $this->render('demande/repertoire.html.twig', [
            'demandes' => $demandes,
            'invitations' => $invitations,
            'is_logged_in' => $user !== null
        ]);
    }

    #[Route('/mes-demandes', name: 'app_demande_mes_demandes', methods: ['GET'])]
    public function mesDemandes(DemandeRepository $demandeRepository): Response
    {
        $user = $this->getUser();
        $demandes = [];
        
        if ($user) {
            $demandes = $demandeRepository->findByDemandeur($user);
        }

        return $this->render('demande/mes_demandes.html.twig', [
            'demandes' => $demandes,
            'is_logged_in' => $user !== null
        ]);
    }

    #[Route('/{id}/accepter', name: 'app_demande_accepter', methods: ['POST'])]
    public function accepter(Request $request, Demande $demande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('accepter'.$demande->getId(), $request->request->get('_token'))) {
            $demande->setStatut('acceptee');
            $entityManager->flush();
            $this->addFlash('success', 'La demande a été acceptée.');
        }

        return $this->redirectToRoute('app_demande_repertoire');
    }

    #[Route('/{id}/refuser', name: 'app_demande_refuser', methods: ['POST'])]
    public function refuser(Request $request, Demande $demande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('refuser'.$demande->getId(), $request->request->get('_token'))) {
            $demande->setStatut('refusee');
            $entityManager->flush();
            $this->addFlash('success', 'La demande a été refusée.');
        }

        return $this->redirectToRoute('app_demande_repertoire');
    }

    #[Route('/invitation/{id}/accepter', name: 'app_invitation_accepter', methods: ['POST'])]
    public function accepterInvitation(Request $request, InvitationRepository $invitationRepository, int $id, EntityManagerInterface $entityManager): Response
    {
        $invitation = $invitationRepository->find($id);
        if (!$invitation) {
            throw $this->createNotFoundException('Invitation not found');
        }

        if ($this->isCsrfTokenValid('accepter'.$invitation->getId(), $request->request->get('_token'))) {
            $invitation->setStatut('acceptee');
            $entityManager->flush();
            $this->addFlash('success', 'L\'invitation a été acceptée.');
        }

        return $this->redirectToRoute('app_demande_repertoire');
    }

    #[Route('/invitation/{id}/refuser', name: 'app_invitation_refuser', methods: ['POST'])]
    public function refuserInvitation(Request $request, InvitationRepository $invitationRepository, int $id, EntityManagerInterface $entityManager): Response
    {
        $invitation = $invitationRepository->find($id);
        if (!$invitation) {
            throw $this->createNotFoundException('Invitation not found');
        }

        if ($this->isCsrfTokenValid('refuser'.$invitation->getId(), $request->request->get('_token'))) {
            $invitation->setStatut('refusee');
            $entityManager->flush();
            $this->addFlash('success', 'L\'invitation a été refusée.');
        }

        return $this->redirectToRoute('app_demande_repertoire');
    }

    #[Route('/debug', name: 'app_demande_debug')]
    public function debug(DemandeRepository $demandeRepository, AnnonceMatchRepository $annonceMatchRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return new Response('Not logged in');
        }

        // Get all demands
        $allDemandes = $demandeRepository->findAll();
        
        // Get demands for current user's announcements
        $userDemandes = $demandeRepository->findByAnnonceOwner($user);
        
        // Get user's announcements
        $userAnnonces = $annonceMatchRepository->findBy(['user' => $user]);

        $debugInfo = [
            'user_id' => $user->getId(),
            'user_email' => $user->getEmail(),
            'total_demandes' => count($allDemandes),
            'user_demandes' => count($userDemandes),
            'user_annonces' => count($userAnnonces),
            'annonces' => [],
            'demandes' => []
        ];

        // Add announcement details
        foreach ($userAnnonces as $annonce) {
            $debugInfo['annonces'][] = [
                'id' => $annonce->getAnnonceId(),
                'titre' => $annonce->getTitre(),
                'user_id' => $annonce->getUser() ? $annonce->getUser()->getId() : null
            ];
        }

        // Add demand details
        foreach ($userDemandes as $demande) {
            $debugInfo['demandes'][] = [
                'id' => $demande->getId(),
                'annonce_id' => $demande->getAnnonce() ? $demande->getAnnonce()->getAnnonceId() : null,
                'demandeur_id' => $demande->getDemandeur() ? $demande->getDemandeur()->getId() : null,
                'statut' => $demande->getStatut()
            ];
        }

        return $this->render('demande/debug.html.twig', [
            'debug_info' => $debugInfo
        ]);
    }
} 