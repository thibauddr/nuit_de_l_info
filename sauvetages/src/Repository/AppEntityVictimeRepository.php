<?php

namespace App\Repository;

use App\Entity\AppEntityVictime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AppEntityVictime|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppEntityVictime|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppEntityVictime[]    findAll()
 * @method AppEntityVictime[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppEntityVictimeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppEntityVictime::class);
    }

    // /**
    //  * @return AppEntityVictime[] Returns an array of AppEntityVictime objects
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
    public function findOneBySomeField($value): ?AppEntityVictime
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
