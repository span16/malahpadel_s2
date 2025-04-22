<?php

namespace App\Repository;

use App\Entity\Demande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Demande>
 */
class DemandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Demande::class);
    }

    public function findByAnnonceOwner($user)
    {
        return $this->createQueryBuilder('d')
            ->innerJoin('d.annonce', 'a')
            ->innerJoin('a.user', 'u')
            ->where('u.id = :userId')
            ->setParameter('userId', $user->getId())
            ->orderBy('d.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByDemandeur($user)
    {
        return $this->createQueryBuilder('d')
            ->where('d.demandeur = :user')
            ->setParameter('user', $user)
            ->orderBy('d.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
} 