<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function save(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getSearchQueryBuilder(array $filters = []): QueryBuilder
    {
        $qb = $this->createQueryBuilder('r')
            ->orderBy('r.id', 'DESC');

        if (!empty($filters['nom'])) {
            $qb->andWhere('r.nom LIKE :nom')
               ->setParameter('nom', '%'.$filters['nom'].'%');
        }

        if (!empty($filters['type'])) {
            $qb->andWhere('r.typeReservation = :type')
               ->setParameter('type', $filters['type']);
        }

        if (!empty($filters['places_min'])) {
            $qb->andWhere('r.nombrePlaces >= :places_min')
               ->setParameter('places_min', $filters['places_min']);
        }

        if (!empty($filters['places_max'])) {
            $qb->andWhere('r.nombrePlaces <= :places_max')
               ->setParameter('places_max', $filters['places_max']);
        }

        if (!empty($filters['code'])) {
            $qb->andWhere('r.codeConfirmation = :code')
               ->setParameter('code', $filters['code']);
        }

        return $qb;
    }

    public function findAllPaginated(int $page = 1, int $limit = 100): array
    {
        $query = $this->createQueryBuilder('r')
            ->orderBy('r.id', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery();

        $paginator = new Paginator($query);
        return iterator_to_array($paginator);
    }

    public function findAllOrderedById(): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function countAll(): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findAllWithEvents(): array
    {
        return $this->findAllOrderedById();
    }

    public function search(array $filters = [], int $page = 1, int $limit = 20): array
    {
        $queryBuilder = $this->getSearchQueryBuilder($filters)
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);

        $paginator = new Paginator($queryBuilder);
        return [
            'results' => iterator_to_array($paginator),
            'total' => count($paginator)
        ];
    }

    public function getDistinctTypes(): array
    {
        return $this->createQueryBuilder('r')
            ->select('DISTINCT r.typeReservation')
            ->orderBy('r.typeReservation', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();
    }

    public function getReservationsStats(): array
    {
        $query = $this->createQueryBuilder('r')
            ->select('r.typeReservation as type, COUNT(r.id) as count')
            ->groupBy('r.typeReservation')
            ->getQuery();

        $results = $query->getResult();
        
        $stats = [];
        foreach ($results as $result) {
            $stats[$result['type']] = $result['count'];
        }
        
        return $stats;
    }

    public function getReservationStatsByType(): array
    {
        return $this->createQueryBuilder('r')
            ->select([
                'r.typeReservation',
                'COUNT(r.id) as reservationCount',
                'SUM(r.prix) as totalPrice'
            ])
            ->groupBy('r.typeReservation')
            ->getQuery()
            ->getResult();
    }
    // Dans ReservationRepository.php
public function findStatsGroupedByType(): array
{
    return $this->createQueryBuilder('r')
        ->select([
            'r.typeReservation as type',
            'COUNT(r.id) as count',
            'SUM(r.prix) as total'
        ])
        ->groupBy('r.typeReservation')
        ->getQuery()
        ->getResult();
}
}