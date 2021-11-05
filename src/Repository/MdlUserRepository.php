<?php

namespace App\Repository;

use App\Entity\MdlUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MdlUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method MdlUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method MdlUser[]    findAll()
 * @method MdlUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MdlUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MdlUser::class);
    }

    // /**
    //  * @return MdlUser[] Returns an array of MdlUser objects
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
    public function findOneBySomeField($value): ?MdlUser
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
