<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutUsController extends AbstractController
{
    #[Route('/aboutus', name: 'aboutus')]
    public function index(): Response
    {
        return $this->render('aboutus/index.html.twig', [
            'page_title' => 'À propos de Malah Padel',
        ]);
    }
}