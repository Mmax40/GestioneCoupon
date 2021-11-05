<?php

namespace App\Repository;

use App\Entity\Costocoupon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Costocoupon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Costocoupon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Costocoupon[]    findAll()
 * @method Costocoupon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CostoCouponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Costocoupon::class);
    }

    // /**
    //  * @return Costocoupon[] Returns an array of Costocoupon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Costocoupon
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
