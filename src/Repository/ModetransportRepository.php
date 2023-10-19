<?php

namespace App\Repository;

use App\Entity\Modetransport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Modetransport>
 *
 * @method Modetransport|null find($id, $lockMode = null, $lockVersion = null)
 * @method Modetransport|null findOneBy(array $criteria, array $orderBy = null)
 * @method Modetransport[]    findAll()
 * @method Modetransport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModetransportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Modetransport::class);
    }

//    /**
//     * @return Modetransport[] Returns an array of Modetransport objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Modetransport
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
