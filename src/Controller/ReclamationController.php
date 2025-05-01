<?php 
namespace App\Controller; 

use App\Entity\Reclamation;
use App\Entity\Reservation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface; 

class ReclamationController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly ReservationRepository $reservationRepository,
        private readonly ReclamationRepository $reclamationRepository,
        private readonly LoggerInterface $logger,
        private readonly ValidatorInterface $validator
    ) {}

        /**************************
         * PARTIE FRONT
         **************************/

        #[Route('/reclamation', name: 'app_reclamation_index', methods: ['GET'])]
        public function index(): Response
        {
            return $this->render('reclamation/index.html.twig', [
                'reclamations' => $this->reclamationRepository->findAllOrderedByDate(),
                'simple_stats' => [
                    'total' => $this->reclamationRepository->count([])
                ],
                'total_reclamations' => $this->reclamationRepository->count([])
            ]);
        }

        #[Route('/reclamation/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
        public function new(Request $request): Response
        {
            $reclamation = new Reclamation();
            $isCancellation = $request->query->getBoolean('is_cancellation');
            
            $this->initializeReclamation($reclamation, $request);
        
            $form = $this->createForm(ReclamationType::class, $reclamation);
            $form->handleRequest($request);
        
            if ($form->isSubmitted() && $form->isValid()) {
                try {
                    $this->processReclamation($reclamation, $isCancellation);
                    
                    $this->addFlash('reclamation_success', [
                        'title' => 'Réception de votre réclamation',
                        'message' => 'Votre demande #'.$reclamation->getId().' a bien été enregistrée.',
                        'details' => 'Notre équipe traitera votre demande dans les plus brefs délais.',
                        'is_cancellation' => $isCancellation
                    ]);
                    
                    return $this->redirectToRoute('app_reclamation_index');
                } catch (\Exception $e) {
                    $this->logger->error('Erreur lors de la création de la réclamation: '.$e->getMessage());
                    $this->addFlash('error', 'Une erreur est survenue lors de l\'enregistrement');
                }
            }
        
            return $this->render('reclamation/new.html.twig', [
                'form' => $form->createView(),
                'is_cancellation' => $isCancellation,
                'reservation' => $reclamation->getReservation(),
                'stats' => [
                    'total' => $this->reclamationRepository->count([]),
                    'pending' => $this->reclamationRepository->count(['etat' => 'Nouvelle'])
                ],
                'total_reclamations' => $this->reclamationRepository->count([])
            ]);
        }

        #[Route('/reclamation/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
        public function edit(Request $request, Reclamation $reclamation): Response
        {
            $form = $this->createForm(ReclamationType::class, $reclamation);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                try {
                    $this->entityManager->flush();
                    $this->addFlash('success', 'Réclamation mise à jour avec succès');
                    return $this->redirectToRoute('app_reclamation_index');
                } catch (\Exception $e) {
                    $this->logger->error('Erreur lors de la modification: '.$e->getMessage());
                    $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour');
                }
            }

            return $this->render('reclamation/edit.html.twig', [
                'reclamation' => $reclamation,
                'form' => $form->createView(),
                'total_reclamations' => $this->reclamationRepository->count([])
            ]);
        }

        #[Route('/reclamation/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
        public function delete(Request $request, Reclamation $reclamation): Response
        {
            if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
                try {
                    $this->entityManager->remove($reclamation);
                    $this->entityManager->flush();
                    $this->addFlash('success', 'Réclamation supprimée avec succès');
                } catch (\Exception $e) {
                    $this->logger->error('Erreur lors de la suppression: '.$e->getMessage());
                    $this->addFlash('error', 'Une erreur est survenue lors de la suppression');
                }
            }

            return $this->redirectToRoute('app_reclamation_index');
        }

        /**************************
         * PARTIE ADMIN
         **************************/

        #[Route('/admin/reclamations/statistiques', name: 'admin_reclamation_stats')]
        public function stats(): Response
        {
            return $this->render('back/stats.html.twig', [
                'stats' => $this->reclamationRepository->findStats(),
                'total_reclamations' => $this->reclamationRepository->count([])
            ]);
        }

        #[Route('/admin/reclamations', name: 'admin_reclamation_index')]
        public function adminIndex(): Response
        {
            return $this->render('back/reclamationback.html.twig', [
                'reclamations' => $this->reclamationRepository->findAllOrderedByDate(),
                'form' => $this->createForm(ReclamationType::class, new Reclamation(), [
                    'action' => $this->generateUrl('admin_reclamation_new')
                ])->createView(),
                'form_title' => 'Gestion des réclamations',
                'button_label' => 'Créer',
                'stats' => [
                    'total' => $this->reclamationRepository->count([]),
                    'allEtats' => ['Nouvelle', 'En cours', 'Résolue', 'Rejetée'],
                    'countByEtat' => $this->getCountByStatus()
                ],
                'show_list' => true,
                'total_reclamations' => $this->reclamationRepository->count([])
            ]);
        }

        #[Route('/admin/reclamation/new', name: 'admin_reclamation_new', methods: ['GET', 'POST'])]
        public function adminNew(Request $request): Response
        {
            $reclamation = new Reclamation();
            $form = $this->createForm(ReclamationType::class, $reclamation);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                try {
                    $this->initializeReclamation($reclamation, $request);
                    $this->entityManager->persist($reclamation);
                    $this->entityManager->flush();

                    $this->addFlash('success', 'Réclamation créée avec succès !');
                    return $this->redirectToRoute('admin_reclamation_index');
                } catch (\Exception $e) {
                    $this->logger->error('Erreur création réclamation: '.$e->getMessage());
                    $this->addFlash('error', 'Erreur lors de la création');
                }
            }

            return $this->render('back/reclamationback.html.twig', [
                'form' => $form->createView(),
                'form_title' => 'Nouvelle réclamation',
                'button_label' => 'Confirmer',
                'show_list' => false,
                'total_reclamations' => $this->reclamationRepository->count([])
            ]);
        }

        #[Route('/admin/reclamation/{id}/edit', name: 'admin_reclamation_edit', methods: ['GET', 'POST'])]
        public function adminEdit(Request $request, Reclamation $reclamation): Response
        {
            $form = $this->createForm(ReclamationType::class, $reclamation);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                try {
                    $this->entityManager->flush();
                    $this->addFlash('success', 'Réclamation mise à jour avec succès !');
                    return $this->redirectToRoute('admin_reclamation_index');
                } catch (\Exception $e) {
                    $this->logger->error('Erreur modification: '.$e->getMessage());
                    $this->addFlash('error', 'Erreur lors de la modification');
                }
            }

            return $this->render('back/reclamationback.html.twig', [
                'form' => $form->createView(),
                'reclamation' => $reclamation,
                'form_title' => 'Modifier réclamation',
                'button_label' => 'Mettre à jour',
                'show_list' => false,
                'total_reclamations' => $this->reclamationRepository->count([])
            ]);
        }

        #[Route('/admin/reclamation/{id}/delete', name: 'admin_reclamation_delete', methods: ['POST'])]
        public function adminDelete(Request $request, Reclamation $reclamation): Response
        {
            if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
                try {
                    $this->entityManager->remove($reclamation);
                    $this->entityManager->flush();
                    $this->addFlash('success', 'Réclamation supprimée avec succès !');
                } catch (\Exception $e) {
                    $this->logger->error('Erreur suppression: '.$e->getMessage());
                    $this->addFlash('error', 'Erreur lors de la suppression');
                }
            }

            return $this->redirectToRoute('admin_reclamation_index');
        }
        
        /**************************
         * VISUALISATION DES DONNEES
         **************************/
        
         #[Route('/admin/reclamation/visualisation', name: 'app_reclamation_visualisation', methods: ['GET'])]
         public function visualisation(): Response
         {
             $reclamations = $this->reclamationRepository->findAllOrderedByDate();
             $heatmap = $this->prepareHeatmapData($reclamations);
             $statusCounts = $this->getCountByStatus();
             $totalReclamations = array_sum($statusCounts); // Total plus fiable
             
             // Préparation des données pour les graphiques
             $analyticsData = $this->prepareAnalyticsData($reclamations);
             $statusEvolution = $this->prepareStatusEvolutionData($reclamations);
             
             return $this->render('back/visualisation.html.twig', [
                 'statusCounts' => $statusCounts,
                 'total_reclamations' => $totalReclamations > 0 ? $totalReclamations : 1, // Éviter division par zéro
                 'heatmapData' => $heatmap['data'],
                 'heatmapMax' => $heatmap['max'],
                 'statusEvolution' => $statusEvolution,
                 'analyticsData' => $analyticsData
             ]);
         }
     

         private function prepareAnalyticsData(array $reclamations): array
         {
             $analytics = [
                 'byDay' => array_fill(0, 7, 0),   // 0 = Lundi, ..., 6 = Dimanche (ISO-8601)
                 'byHour' => array_fill(0, 24, 0),
                 'seasonality' => [
                     'months' => array_fill(1, 12, 0), // 1 = Jan, ..., 12 = Dec
                 ],
                 'dailyCounts' => [], // Ajout pour tendance journalière
                 'weeklyTrends' => [] // Ajout pour tendance hebdomadaire
             ];
     
             // Compteurs pour les tendances temporelles
             $dailyCounts = [];
             $weeklyTrends = [];
             
             // Date actuelle pour calculer les tendances
             $now = new \DateTimeImmutable();
             $thirtyDaysAgo = $now->modify('-30 days');
             
             foreach ($reclamations as $rec) {
                 if (!$rec->getDate() instanceof \DateTimeInterface) {
                     continue;
                 }
                 $date = \DateTimeImmutable::createFromInterface($rec->getDate());
     
                 // N: ISO-8601 jour de la semaine (1 Lun - 7 Dim), ajustement à 0-6
                 $dayOfWeek = (int)$date->format('N') - 1;
                 $analytics['byDay'][$dayOfWeek]++;
     
                 // G: Format 24 heures (0-23)
                 $hourOfDay = (int)$date->format('G');
                 $analytics['byHour'][$hourOfDay]++;
     
                 // n: Numéro du mois (1-12)
                 $month = (int)$date->format('n');
                 $analytics['seasonality']['months'][$month]++;
                 
                 // Tendance journalière sur les 30 derniers jours
                 if ($date >= $thirtyDaysAgo) {
                     $dateKey = $date->format('Y-m-d');
                     if (!isset($dailyCounts[$dateKey])) {
                         $dailyCounts[$dateKey] = 0;
                     }
                     $dailyCounts[$dateKey]++;
                 }
                 
                 // Tendance hebdomadaire
                 $weekKey = $date->format('o-W'); // Année-NuméroSemaine (ISO)
                 if (!isset($weeklyTrends[$weekKey])) {
                     $weeklyTrends[$weekKey] = 0;
                 }
                 $weeklyTrends[$weekKey]++;
             }
             
             // Tri des tendances par dates croissantes
             ksort($dailyCounts);
             ksort($weeklyTrends);
             
             // Ajouter les tendances aux analytics
             $analytics['dailyCounts'] = $dailyCounts;
             $analytics['weeklyTrends'] = $weeklyTrends;
             
             return $analytics;
         }
     
        /**************************
         * METHODES PRIVEES
         **************************/

        private function initializeReclamation(Reclamation $reclamation, Request $request): void
        {
            $reclamation->setDate(new \DateTime());
            $reclamation->setEtat('Nouvelle');

            $reservationId = $request->query->getInt('reservation_id');
            if ($reservationId > 0) {
                $reservation = $this->reservationRepository->find($reservationId);
                if ($reservation) {
                    $reclamation->setReservation($reservation);
                    if ($request->query->getBoolean('is_cancellation')) {
                        $reclamation->setRaison('Annulation de réservation #'.$reservation->getId());
                        $this->logger->info('Init réclamation annulation', ['id' => $reservation->getId()]);
                    }
                }
            }
        }

        private function processReclamation(Reclamation $reclamation, bool $isCancellation): void
        {
            $this->entityManager->persist($reclamation);
            $this->entityManager->flush();

            $this->logger->info(($isCancellation ? 'Annulation' : 'Réclamation').' enregistrée', [
                'id' => $reclamation->getId(),
                'user' => $this->getUser()?->getUserIdentifier()
            ]);
        }

        private function getCountByStatus(): array
        {
            // Utiliser GROUP BY pour l'efficacité si possible
            $qb = $this->reclamationRepository->createQueryBuilder('r')
                ->select('r.etat, COUNT(r.id) as count')
                ->groupBy('r.etat');
            $results = $qb->getQuery()->getArrayResult();
    
            $counts = [
                'Nouvelle' => 0,
                'En cours' => 0,
                'Résolue' => 0,
                'Rejetée' => 0
            ];
            foreach ($results as $row) {
                if (isset($counts[$row['etat']])) {
                    $counts[$row['etat']] = (int)$row['count'];
                }
            }
            return $counts;
        }
        
        private function prepareHeatmapData(array $reclamations): array
        {
            $data = [];
            $max = 0;
            $today = new \DateTimeImmutable(); // Utiliser Immutable pour sécurité
            // Retour plus loin si nécessaire, 6 mois
            $startDate = $today->modify('-6 months')->setTime(0, 0);
            $endDate = $today->setTime(23, 59, 59);
    
            // Initialiser les données pour la période
            $currentDate = $startDate;
            while ($currentDate <= $endDate) {
                $data[$currentDate->format('Y-m-d')] = 0;
                $currentDate = $currentDate->modify('+1 day');
            }
    
            foreach ($reclamations as $rec) {
                if ($rec->getDate() instanceof \DateTimeInterface) {
                    // Convertir en Immutable si ce n'est pas déjà le cas
                    $recDate = \DateTimeImmutable::createFromInterface($rec->getDate());
                    if ($recDate >= $startDate && $recDate <= $endDate) {
                        $dateKey = $recDate->format('Y-m-d');
                        if (isset($data[$dateKey])) { // Devrait toujours être défini maintenant
                            $data[$dateKey]++;
                            if ($data[$dateKey] > $max) {
                                $max = $data[$dateKey];
                            }
                        }
                    }
                }
            }
    
            return [
                'data' => $data,
                'max' => $max
            ];
        }

        private function prepareStatusEvolutionData(array $reclamations): array
    {
        $data = [];
        $statusOrder = ['Nouvelle', 'En cours', 'Résolue', 'Rejetée'];
        $today = new \DateTimeImmutable();
        // Retour plus loin, par ex. 26 semaines (6 mois)
        $numWeeks = 26;

        // Initialiser les semaines
        for ($i = $numWeeks - 1; $i >= 0; $i--) {
            $weekDate = $today->modify("-$i weeks");
            $weekKey = $weekDate->format('o-W'); // Année et numéro de semaine ISO 8601
            $data[$weekKey] = array_fill_keys($statusOrder, 0);
        }

        foreach ($reclamations as $rec) {
            if (!$rec->getDate() instanceof \DateTimeInterface) {
                continue;
            }
            $recDate = \DateTimeImmutable::createFromInterface($rec->getDate());
            $weekKey = $recDate->format('o-W');
            $status = $rec->getEtat();

            // Normaliser le statut de manière robuste
            $normalizedStatus = null;
            foreach ($statusOrder as $validStatus) {
                if (strcasecmp($status, $validStatus) === 0) {
                    $normalizedStatus = $validStatus;
                    break;
                }
            }

            if ($normalizedStatus && isset($data[$weekKey])) {
                $data[$weekKey][$normalizedStatus]++;
            }
        }

        // Trier par clé de semaine
        ksort($data); 
        return $data;
    }

    }