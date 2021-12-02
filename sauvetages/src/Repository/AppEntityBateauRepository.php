<?php

namespace App\Repository;

use App\Entity\AppEntityBateau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AppEntityBateau|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppEntityBateau|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppEntityBateau[]    findAll()
 * @method AppEntityBateau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppEntityBateauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppEntityBateau::class);
    }

    // /**
    //  * @return AppEntityBateau[] Returns an array of AppEntityBateau objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AppEntityBateau
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
