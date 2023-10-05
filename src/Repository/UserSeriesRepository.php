<?php

namespace App\Repository;

use App\Entity\UserSeries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserSeries>
 *
 * @method UserSeries|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserSeries|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserSeries[]    findAll()
 * @method UserSeries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserSeriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserSeries::class);
    }

//    /**
//     * @return UserSeries[] Returns an array of UserSeries objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UserSeries
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
