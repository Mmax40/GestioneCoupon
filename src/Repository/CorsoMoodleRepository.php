<?php

namespace App\Repository;

use App\Entity\MdlCourse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MdlCourse|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdlCourse|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdlCourse[]    findAll()
 * @method MdlCourse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CorsoMoodleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdlCourse::class);
    }

    // /**
    //  * @return MdlCourse[] Returns an array of MdlCourse objects
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
    public function findOneBySomeField($value): ?MdlCourse
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
