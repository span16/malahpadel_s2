<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\EvenementRepository;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use App\Service\PdfGeneratorService;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
// Importer la bibliothèque pour générer des codes-barres
use Picqer\Barcode\BarcodeGeneratorPNG;

class ReservationController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ReservationRepository $reservationRepository,
        private EvenementRepository $evenementRepository,
        private CsrfTokenManagerInterface $csrfTokenManager,
        private LoggerInterface $logger,
        private ChartBuilderInterface $chartBuilder
    ) {}

    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->redirectToRoute('app_reservation');
    }

    #[Route('/reservation', name: 'app_reservation', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation, [
            'evenement_names' => $this->getEventNames()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    if (!$reservation->getCodeConfirmation()) {
                        $reservation->generateConfirmationCode();
                    }

                    $reservation->setStatus('en_attente');
                    $reservation->setPrix($this->calculatePrice($reservation));

                    $this->entityManager->persist($reservation);
                    $this->entityManager->flush();

                    return $this->redirectToRoute('app_stripe_payment', ['id' => $reservation->getId()]);
                    
                } catch (\Exception $e) {
                    $this->logger->error('Erreur création réservation: ' . $e->getMessage());
                    $this->addFlash('error', 'Une erreur est survenue lors de la création');
                }
            } else {
                foreach ($form->getErrors(true) as $error) {
                    $this->logger->error('Erreur validation: '.$error->getMessage());
                }
            }
        }

        return $this->render('reservation/reservation.html.twig', [
            'form' => $form->createView(),
            'reservations' => $this->reservationRepository->findAllOrderedById(),
            'current_reservation' => $reservation
        ]);
    }

    private function calculatePrice(Reservation $reservation): float
    {
        $prices = [
            'simple' => 30.0,
            'duo' => 50.0,
            'groupe' => 80.0,
            'vip' => 100.0,
            'tournoi' => 120.0,
            'location' => 60.0,
            'coach' => 70.0
        ];

        return $prices[$reservation->getTypeReservation()] ?? 50.0;
    }

    #[Route('/reservation/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show($id): Response
    {
        $reservation = $this->reservationRepository->find($id);
        
        if (!$reservation) {
            $this->addFlash('error', 'La réservation #'.$id.' n\'existe pas');
            return $this->redirectToRoute('admin_reservation_index');
        }

        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation
        ]);
    }

    #[Route('/reservation/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation, [
            'evenement_names' => $this->getEventNames()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $this->entityManager->flush();
                
                if ($request->isXmlHttpRequest()) {
                    return $this->jsonResponse($reservation);
                }

                $this->addFlash('success', 'Réservation mise à jour avec succès !');
                return $this->redirectToRoute('app_reservation');
            } catch (\Exception $e) {
                $this->logger->error('Erreur modification: ' . $e->getMessage());
                $this->addFlash('error', 'Erreur lors de la modification');
            }
        }

        return $this->render('reservation/edit.html.twig', [
            'form' => $form->createView(),
            'reservation' => $reservation
        ]);
    }

    #[Route('/reservation/{id}/cancel', name: 'app_reservation_cancel', methods: ['POST'])]
    public function cancel(Request $request, Reservation $reservation): Response
    {
        if (!$this->isCsrfTokenValid('cancel'.$reservation->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide');
            return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getId()]);
        }
    
        return $this->redirectToRoute('app_reclamation_new', [
            'reservation_id' => $reservation->getId(),
            'is_cancellation' => 1
        ], Response::HTTP_SEE_OTHER);
    }

    #[Route('/reservation/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            try {
                $this->entityManager->remove($reservation);
                $this->entityManager->flush();

                if ($request->isXmlHttpRequest()) {
                    return new JsonResponse(['success' => true]);
                }

                $this->addFlash('success', 'Réservation supprimée !');
            } catch (\Exception $e) {
                $this->logger->error('Erreur suppression: ' . $e->getMessage());
                $this->addFlash('error', 'Erreur lors de la suppression');
            }
        }

        return $this->redirectToRoute('app_reservation');
    }

    #[Route('/admin/reservation/{id}', name: 'admin_reservation_show', methods: ['GET'])]
    public function adminShow($id): Response
    {
        $reservation = $this->reservationRepository->find($id);
        
        if (!$reservation) {
            $this->addFlash('error', 'Réservation introuvable');
            return $this->redirectToRoute('admin_reservation_index');
        }

        return $this->render('back/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/admin/reservations', name: 'admin_reservation_index', methods: ['GET', 'POST'])]
    public function adminIndex(Request $request, PaginatorInterface $paginator): Response
    {
        $filters = [
            'nom' => $request->query->get('nom'),
            'type' => $request->query->get('type'),
            'places_min' => $request->query->get('places_min'),
            'places_max' => $request->query->get('places_max'),
            'code' => $request->query->get('code')
        ];

        $query = $this->reservationRepository->getSearchQueryBuilder($filters);
        $reservations = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10
        );

        $types = $this->reservationRepository->getDistinctTypes();
        $stats = $this->reservationRepository->getReservationStatsByType();

        $statsTable = [];
        foreach ($stats as $stat) {
            $statsTable[] = [
                'type' => $this->formatReservationType($stat['typeReservation']),
                'count' => $stat['reservationCount'],
                'total' => number_format($stat['totalPrice'], 2, ',', ' ') . ' €'
            ];
        }

        $chart = $this->createChart($stats);

        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation, [
            'evenement_names' => $this->getEventNames(),
            'action' => $this->generateUrl('admin_reservation_new')
        ]);

        return $this->render('back/reservationback.html.twig', [
            'reservations' => $reservations,
            'form' => $form->createView(),
            'form_title' => 'Gestion des réservations',
            'button_label' => 'Créer',
            'filters' => $filters,
            'types' => $types,
            'chart' => $chart,
            'statsTable' => $statsTable,
            'total_reservations' => $this->reservationRepository->count([])
        ]);
    }

    #[Route('/admin/reservation/new', name: 'admin_reservation_new', methods: ['GET', 'POST'])]
    public function adminNew(Request $request): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation, [
            'evenement_names' => $this->getEventNames(),
            'action' => $this->generateUrl('admin_reservation_new')
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    if (!$reservation->getCodeConfirmation()) {
                        $reservation->generateConfirmationCode();
                    }

                    $this->entityManager->persist($reservation);
                    $this->entityManager->flush();

                    $this->addFlash('success', 'Réservation créée avec succès !');
                    return $this->redirectToRoute('admin_reservation_index');
                } catch (\Exception $e) {
                    $this->logger->error('Erreur création réservation: ' . $e->getMessage());
                    $this->addFlash('error', 'Erreur lors de la création');
                    
                    return $this->render('back/reservationback.html.twig', [
                        'form' => $form->createView(),
                        'form_title' => 'Nouvelle réservation',
                        'button_label' => 'Confirmer',
                        'reservations' => $this->reservationRepository->findAllOrderedById(),
                        'total_reservations' => $this->reservationRepository->count([]),
                        'show_list' => false,
                        'chart' => $this->createEmptyChart()
                    ]);
                }
            }
        }

        return $this->render('back/reservationback.html.twig', [
            'form' => $form->createView(),
            'form_title' => 'Nouvelle réservation',
            'button_label' => 'Confirmer',
            'reservations' => $this->reservationRepository->findAllOrderedById(),
            'total_reservations' => $this->reservationRepository->count([]),
            'show_list' => false,
            'chart' => $this->createEmptyChart()
        ]);
    }

    #[Route('/admin/reservation/{id}/edit', name: 'admin_reservation_edit', methods: ['GET', 'POST'])]
    public function adminEdit(Request $request, Reservation $reservation): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation, [
            'evenement_names' => $this->getEventNames()
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $this->entityManager->flush();
                $this->addFlash('success', 'Réservation mise à jour avec succès !');
                return $this->redirectToRoute('admin_reservation_index');
            } catch (\Exception $e) {
                $this->logger->error('Erreur modification: ' . $e->getMessage());
                $this->addFlash('error', 'Erreur lors de la modification');
            }
        }

        return $this->render('back/reservationback.html.twig', [
            'form' => $form->createView(),
            'reservation' => $reservation,
            'reservations' => $this->reservationRepository->findAllOrderedById(),
            'form_title' => 'Modifier réservation',
            'button_label' => 'Mettre à jour',
            'total_reservations' => $this->reservationRepository->count([]),
            'show_list' => false,
            'chart' => $this->createEmptyChart()
        ]);
    }

    #[Route('/admin/reservation/{id}/delete', name: 'admin_reservation_delete', methods: ['POST'])]
    public function adminDelete(Request $request, Reservation $reservation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            try {
                $this->entityManager->remove($reservation);
                $this->entityManager->flush();
                $this->addFlash('success', 'Réservation supprimée avec succès !');
            } catch (\Exception $e) {
                $this->logger->error('Erreur suppression: ' . $e->getMessage());
                $this->addFlash('error', 'Erreur lors de la suppression');
            }
        }

        return $this->redirectToRoute('admin_reservation_index');
    }

    #[Route('/admin/reservations/export', name: 'admin_reservation_export')]
    public function export(Request $request): Response
    {
        $filters = [
            'nom' => $request->query->get('nom'),
            'type' => $request->query->get('type'),
            'places_min' => $request->query->get('places_min'),
            'places_max' => $request->query->get('places_max'),
            'code' => $request->query->get('code')
        ];

        $reservations = $this->reservationRepository->search($filters, 1, PHP_INT_MAX)['results'];

        $csvData = "ID;Événement;Type;Places;Remarque;Code\n";
        
        foreach ($reservations as $reservation) {
            $csvData .= sprintf(
                "%s;%s;%s;%s;%s;%s\n",
                $reservation->getId(),
                $reservation->getNom(),
                $reservation->getTypeReservation(),
                $reservation->getNombrePlaces(),
                str_replace(';', ',', $reservation->getRemarque() ?? ''),
                $reservation->getCodeConfirmation()
            );
        }

        $response = new Response($csvData);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="reservations_' . date('Y-m-d') . '.csv"');

        return $response;
    }

    #[Route('/admin/reservations/event-names', name: 'admin_reservation_event_names', methods: ['GET'])]
    public function getEventNamesAjax(): JsonResponse
    {
        $eventNames = $this->getEventNames();
        return $this->json($eventNames);
    }

    #[Route('/admin/reservations/stats', name: 'admin_reservation_stats')]
    public function reservationStats(): Response
    {
        $stats = $this->reservationRepository->getReservationStatsByType();
        $chart = $this->createChart($stats);

        return $this->render('back/reservation_stats.html.twig', [
            'chart' => $chart,
            'stats' => $stats
        ]);
    }

    #[Route('/reservation/{id}/pdf', name: 'app_reservation_pdf')]
public function generatePdf(Reservation $reservation, PdfGeneratorService $pdfGenerator): Response
{
    try {
        // 1. Génération du code-barres
        $generator = new BarcodeGeneratorPNG();
        $barcodeData = $generator->getBarcode(
            $reservation->getCodeConfirmation(), 
            $generator::TYPE_CODE_128, 
            2, 
            50
        );
        $barcodeBase64 = base64_encode($barcodeData);

        // 2. Vérification de la signature
        $signaturePath = $this->getParameter('kernel.project_dir').'/public/images/signature.png';
        $signatureBase64 = file_exists($signaturePath) 
            ? base64_encode(file_get_contents($signaturePath)) 
            : null;

        // 3. Génération du PDF avec toutes les données nécessaires
        $pdfContent = $pdfGenerator->generatePdf('pdf/reservation_bundle.html.twig', [
            'reservation' => $reservation,
            'barcode' => $barcodeBase64, // <-- Ceci est requis par le template
            'signature' => $signatureBase64
        ]);

        return new Response(
            $pdfContent,
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="reservation_%d.pdf"', $reservation->getId())
            ]
        );
    } catch (\Exception $e) {
        $this->logger->error('Erreur génération PDF: ' . $e->getMessage());
        $this->addFlash('error', 'Erreur lors de la génération du PDF');
        return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getId()]);
    }
}

    #[Route('/reservation/{id}/barcode', name: 'app_reservation_barcode', methods: ['GET'])]
    public function generateBarcode(Reservation $reservation): Response
    {
        try {
            // Créer un générateur de code-barres
            $generator = new BarcodeGeneratorPNG();
            
            // Générer un code-barres Code 128 basé sur le code de confirmation
            $barcodeData = $generator->getBarcode($reservation->getCodeConfirmation(), $generator::TYPE_CODE_128, 2, 50);

            // Retourner l'image du code-barres
            return new Response(
                $barcodeData,
                Response::HTTP_OK,
                ['Content-Type' => 'image/png']
            );
        } catch (\Exception $e) {
            $this->logger->error('Erreur génération code-barres: ' . $e->getMessage());
            $this->addFlash('error', 'Erreur lors de la génération du code-barres');
            return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getId()]);
        }
    }

    #[Route('/admin/reservation/{id}/exists', name: 'admin_reservation_exists', methods: ['GET'])]
    public function checkReservationExists($id): JsonResponse
    {
        $reservation = $this->reservationRepository->find($id);
        return $this->json(['exists' => $reservation !== null]);
    }

    private function jsonResponse(Reservation $reservation): JsonResponse
    {
        return new JsonResponse([
            'success' => true,
            'id' => $reservation->getId(),
            'nom' => $reservation->getNom(),
            'codeConfirmation' => $reservation->getCodeConfirmation(),
            'csrf_token' => $this->csrfTokenManager->getToken('delete'.$reservation->getId())->getValue()
        ]);
    }

    private function getEventNames(): array
    {
        $evenementNamesRaw = $this->evenementRepository->findAllEventNames();
        return array_combine($evenementNamesRaw, $evenementNamesRaw);
    }

    private function formatReservationType(string $type): string
    {
        $types = [
            'simple' => 'Simple',
            'duo' => 'Duo',
            'groupe' => 'Groupe',
            'vip' => 'VIP',
            'tournoi' => 'Tournoi',
            'location' => 'Location',
            'coach' => 'Coach'
        ];

        return $types[$type] ?? ucfirst($type);
    }

    private function createChart(array $stats): Chart
    {
        $chart = $this->chartBuilder->createChart(Chart::TYPE_PIE);
        
        if (!empty($stats)) {
            $chart->setData([
                'labels' => array_map([$this, 'formatReservationType'], array_column($stats, 'typeReservation')),
                'datasets' => [
                    [
                        'label' => 'Montant total (€)',
                        'backgroundColor' => ['#3498DB', '#2ECC71', '#E74C3C', '#F39C12', '#9B59B6'],
                        'data' => array_column($stats, 'totalPrice')
                    ]
                ]
            ]);
            $chart->setOptions([
                'responsive' => true,
                'plugins' => [
                    'legend' => [
                        'position' => 'right'
                    ],
                    'title' => [
                        'display' => true,
                        'text' => 'Répartition des paiements par type'
                    ]
                ]
            ]);
        } else {
            $chart->setData(['labels' => [], 'datasets' => []]);
        }

        return $chart;
    }

    private function createEmptyChart(): Chart
    {
        $chart = $this->chartBuilder->createChart(Chart::TYPE_PIE);
        $chart->setData(['labels' => [], 'datasets' => []]);
        return $chart;
    }
}