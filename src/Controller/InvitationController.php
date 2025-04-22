<?php

namespace App\Controller;

use App\Entity\Invitation;
use App\Entity\InvitationStatus;
use App\Form\InvitationType;
use App\Repository\InvitationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

#[Route('/invitation')]
class InvitationController extends AbstractController
{
    // Display all invitations
    #[Route('/', name: 'app_invitation_index', methods: ['GET'])]
    public function index(InvitationRepository $invitationRepository): Response
    {
        $user = $this->getUser();
        $invitations = [];
        
        if ($user) {
            $invitations = $invitationRepository->findBy(['senderEmail' => $user->getEmail()]);
        }

        return $this->render('invitation/index.html.twig', [
            'invitations' => $invitations,
            'is_logged_in' => $user !== null
        ]);
    }

    // Create a new invitation
    #[Route('/new', name: 'app_invitation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'You must be logged in to send invitations.');
            return $this->redirectToRoute('app_login');
        }

        $invitation = new Invitation();
        $invitation->setSenderEmail($user->getEmail());
        
        $form = $this->createForm(InvitationType::class, $invitation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($invitation);
            $entityManager->flush();

            $this->addFlash('success', 'Invitation sent successfully!');
            return $this->redirectToRoute('app_invitation_index');
        }

        return $this->render('invitation/new.html.twig', [
            'invitation' => $invitation,
            'form' => $form->createView(),
        ]);
    }

    // Show an individual invitation
    #[Route('/{id}', name: 'app_invitation_show', methods: ['GET'])]
    public function show(Invitation $invitation): Response
    {
        return $this->render('invitation/show.html.twig', [
            'invitation' => $invitation,
        ]);
    }

    // Edit an invitation
    #[Route('/{id}/edit', name: 'app_invitation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Invitation $invitation, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        $form = $this->createForm(InvitationType::class, $invitation);
        
        // Pre-select the current receiver
        $receiver = $userRepository->findOneBy(['email' => $invitation->getReceiverEmail()]);
        if ($receiver) {
            $form->get('receiver')->setData($receiver);
        }
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_invitation_index');
        }

        return $this->render('invitation/edit.html.twig', [
            'invitation' => $invitation,
            'form' => $form->createView(),
        ]);
    }

    // Delete an invitation
    #[Route('/{id}', name: 'app_invitation_delete', methods: ['POST'])]
    public function delete(Request $request, Invitation $invitation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$invitation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($invitation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_invitation_index');
    }

    #[Route('/mes-invitations', name: 'app_invitation_mes_invitations')]
    public function mesInvitations(InvitationRepository $invitationRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $invitationsEnvoyees = $invitationRepository->findBy(['senderEmail' => $user->getEmail()]);
        $invitationsRecues = $invitationRepository->findBy(['receiverEmail' => $user->getEmail()]);

        return $this->render('invitation/mes_invitations.html.twig', [
            'invitationsEnvoyees' => $invitationsEnvoyees,
            'invitationsRecues' => $invitationsRecues,
        ]);
    }

    #[Route('/accepter/{id}', name: 'app_invitation_accepter', methods: ['POST'])]
    public function accepter(Request $request, Invitation $invitation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('accepter'.$invitation->getId(), $request->request->get('_token'))) {
            $invitation->setStatut('acceptee');
            $entityManager->flush();
            $this->addFlash('success', 'L\'invitation a été acceptée.');
        }

        return $this->redirectToRoute('app_demande_repertoire');
    }

    #[Route('/refuser/{id}', name: 'app_invitation_refuser', methods: ['POST'])]
    public function refuser(Request $request, Invitation $invitation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('refuser'.$invitation->getId(), $request->request->get('_token'))) {
            $invitation->setStatut('refusee');
            $entityManager->flush();
            $this->addFlash('success', 'L\'invitation a été refusée.');
        }

        return $this->redirectToRoute('app_demande_repertoire');
    }
}
