<?php

namespace App\Controller\BackO;

use App\Repository\AnnonceMatchRepository;
use App\Repository\RechercheRepository;
use App\Repository\InvitationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back')]
class BackController extends AbstractController
{
    #[Route('/', name: 'back_home')]
    public function index(
        AnnonceMatchRepository $annonceRepository,
        RechercheRepository $rechercheRepository,
        InvitationRepository $invitationRepository
    ): Response {
        return $this->render('back/index.html.twig', [
            'annonces' => $annonceRepository->findAll(),
            'recherches' => $rechercheRepository->findAll(),
            'invitations' => $invitationRepository->findAll(),
        ]);
    }

    #[Route('/backO', name: 'app_backO')]
    public function backO(
        AnnonceMatchRepository $annonceRepository,
        RechercheRepository $rechercheRepository,
        InvitationRepository $invitationRepository
    ): Response
    {
        return $this->render('back/backo/index.html.twig', [
            'annonces' => $annonceRepository->findAll(),
            'recherches' => $rechercheRepository->findAll(),
            'invitations' => $invitationRepository->findAll(),
        ]);
    }
} 