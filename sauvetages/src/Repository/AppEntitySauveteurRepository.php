<?php

namespace App\Repository;

use App\Entity\AppEntitySauveteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AppEntitySauveteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppEntitySauveteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppEntitySauveteur[]    findAll()
 * @method AppEntitySauveteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppEntitySauveteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppEntitySauveteur::class);
    }

    // /**
    //  * @return AppEntitySauveteur[] Returns an array of AppEntitySauveteur objects
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
    public function findOneBySomeField($value): ?AppEntitySauveteur
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
