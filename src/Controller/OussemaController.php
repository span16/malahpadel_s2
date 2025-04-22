<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OussemaController extends AbstractController
{
    #[Route('/ouss', name: 'app_ouss')]
    public function index(): Response
    {
        return $this->render('oussema/jojo.html.twig');
    }
} 
