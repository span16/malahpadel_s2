<?php

namespace App\Repository;

use App\Entity\Reclamation;
use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Connection;

class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    // Méthodes CRUD de base
    public function save(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // Méthodes de recherche
    public function findAllOrderedByDate(): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.date', 'DESC')
            ->getQuery()
            ->getResult();
    }
    public function findAllWithStats(): array
{
    return $this->createQueryBuilder('r')
        ->select('r.etat, COUNT(r.id) as count')
        ->groupBy('r.etat')
        ->getQuery()
        ->getResult();
}
    public function findByReservation(Reservation $reservation): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.reservation = :reservation')
            ->setParameter('reservation', $reservation)
            ->orderBy('r.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByEtat(string $etat): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.etat = :etat')
            ->setParameter('etat', $etat)
            ->orderBy('r.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // Méthodes de comptage et statistiques
    public function count(array $criteria = []): int
    {
        $qb = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)'); // On utilise 'id' ici pour DQL

        foreach ($criteria as $field => $value) {
            $qb->andWhere("r.$field = :$field")
               ->setParameter($field, $value);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function countByEtat(): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.etat as etat, COUNT(r.id) as count') // On utilise 'id' ici pour DQL
            ->groupBy('r.etat')
            ->getQuery()
            ->getResult();
    }

    public function countLastDays(int $days): int
    {
        $date = new \DateTime("-$days days");
        
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)') // On utilise 'id' ici pour DQL
            ->where('r.date >= :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countUntreatedReclamations(): int
    {
        return $this->count(['etat' => 'Nouvelle']);
    }

    // Méthodes de recherche avancées
    public function findBetweenDates(\DateTimeInterface $startDate, \DateTimeInterface $endDate): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.date BETWEEN :start AND :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->orderBy('r.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findLastForReservation(Reservation $reservation): ?Reclamation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.reservation = :reservation')
            ->setParameter('reservation', $reservation)
            ->orderBy('r.date', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findRecentReclamations(int $limit = 5): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.date', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findUntreatedReclamations(): array
    {
        return $this->findByEtat('Nouvelle');
    }

    // Méthodes de statistiques complètes
    public function findStats(): array
    {
        /** @var Connection $conn */
        $conn = $this->getEntityManager()->getConnection();
        
        $monthlyTrend = $conn->executeQuery("
            SELECT 
                DATE_FORMAT(r.date, '%Y-%m') as month, 
                COUNT(r.id_reclamation) as count
            FROM reclamation r
            WHERE r.date >= DATE_SUB(CURRENT_DATE(), INTERVAL 1 YEAR)
            GROUP BY month
            ORDER BY month ASC
        ")->fetchAllAssociative();

        $allEtats = $this->getAllEtats();
        $countByEtat = [];
        
        foreach ($allEtats as $etat) {
            $countByEtat[$etat] = $this->count(['etat' => $etat]);
        }

        return [
            'total' => $this->count([]),
            'last7days' => $this->countLastDays(7),
            'last30days' => $this->countLastDays(30),
            'byStatus' => $this->countByEtat(),
            'monthlyTrend' => $monthlyTrend,
            'recent' => $this->findRecentReclamations(5),
            'untreated' => $this->countUntreatedReclamations(),
            'countByEtat' => $countByEtat,
            'allEtats' => $allEtats
        ];
    }

    private function getAllEtats(): array
    {
        $results = $this->createQueryBuilder('r')
            ->select('DISTINCT r.etat')
            ->getQuery()
            ->getResult();
        
        return array_column($results, 'etat');
    }
}