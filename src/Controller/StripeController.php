<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class StripeController extends AbstractController
{
    public function __construct(
        private string $stripeSecretKey,
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/paiement/{id}', name: 'app_stripe_payment', methods: ['GET'])]
    public function createCheckoutSession(Reservation $reservation): Response
    {
        Stripe::setApiKey($this->stripeSecretKey);

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Réservation Padel: ' . $reservation->getNom(),
                    ],
                    'unit_amount' => $reservation->getPrix() * 100, // Convertir en centimes
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl(
                'app_stripe_success',
                ['id' => $reservation->getId()],
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
            'cancel_url' => $this->generateUrl(
                'app_stripe_cancel',
                ['id' => $reservation->getId()],
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
        ]);

        return $this->redirect($session->url);
    }

    #[Route('/paiement/success/{id}', name: 'app_stripe_success')]
    public function success(Reservation $reservation): Response
    {
        $reservation->setStatus('payé');
        $this->entityManager->flush();

        return $this->render('stripe/success.html.twig', [
            'reservation' => $reservation
        ]);
    }

    #[Route('/paiement/cancel/{id}', name: 'app_stripe_cancel')]
    public function cancel(Reservation $reservation): Response
    {
        return $this->render('stripe/cancel.html.twig', [
            'reservation' => $reservation
        ]);
    }
}