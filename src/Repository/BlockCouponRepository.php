<?php

namespace App\Repository;

use App\Entity\MoBlockCouponCourses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MoBlockCouponCourses|null find($id, $lockMode = null, $lockVersion = null)
 * @method MoBlockCouponCourses|null findOneBy(array $criteria, array $orderBy = null)
 * @method MoBlockCouponCourses[]    findAll()
 * @method MoBlockCouponCourses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlockCouponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MoBlockCouponCourses::class);
    }

    // /**
    //  * @return MoBlockCouponCourses[] Returns an array of MoBlockCouponCourses objects
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
    public function findOneBySomeField($value): ?MoBlockCouponCourses
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
