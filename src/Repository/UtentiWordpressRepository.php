<?php

namespace App\Repository;

use App\Entity\Utentiwordpress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Utentiwordpress|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utentiwordpress|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utentiwordpress[]    findAll()
 * @method Utentiwordpress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtentiWordpressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utentiwordpress::class);
    }

    // /**
    //  * @return Utentiwordpress[] Returns an array of Utentiwordpress objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Utentiwordpress
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
