<?php
// src/Controller/HomeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_root')]
    public function root(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();
        
        return $this->render('home.html.twig', [
            'user' => $user, // Passe l'utilisateur à Twig
        ]);
    }
}
