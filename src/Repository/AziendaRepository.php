<?php

namespace App\Repository;

use App\Entity\Azienda;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Azienda|null find($id, $lockMode = null, $lockVersion = null)
 * @method Azienda|null findOneBy(array $criteria, array $orderBy = null)
 * @method Azienda[]    findAll()
 * @method Azienda[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AziendaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Azienda::class);
    }

    // /**
    //  * @return Azienda[] Returns an array of Azienda objects
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
    public function findOneBySomeField($value): ?Azienda
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
