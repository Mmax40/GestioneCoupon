<?php

namespace App\Repository;

use App\Entity\MoBlockCoupon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MoBlockCoupon|null find($id, $lockMode = null, $lockVersion = null)
 * @method MoBlockCoupon|null findOneBy(array $criteria, array $orderBy = null)
 * @method MoBlockCoupon[]    findAll()
 * @method MoBlockCoupon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CouponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MoBlockCoupon::class);
    }

    // /**
    //  * @return MoBlockCoupon[] Returns an array of MoBlockCoupon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MoBlockCoupon
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
