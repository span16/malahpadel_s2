<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    public function findAllOrderedByName(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }

   // EvenementRepository.php
   public function findAllEventNames(): array
   {
       $results = $this->createQueryBuilder('e')
           ->select('e.nom')
           ->getQuery()
           ->getScalarResult();
       
       return array_column($results, 'nom');
   }

    public function findActiveEvents(): QueryBuilder
    {
        return $this->createQueryBuilder('e')
            ->where('e.dateDebut >= :now')
            ->setParameter('now', new \DateTime())
            ->orderBy('e.dateDebut', 'ASC');
    }
}


