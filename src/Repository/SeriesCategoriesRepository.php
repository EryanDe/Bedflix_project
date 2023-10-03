<?php

namespace App\Repository;

use App\Entity\SeriesCategories;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SeriesCategories>
 *
 * @method SeriesCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method SeriesCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method SeriesCategories[]    findAll()
 * @method SeriesCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeriesCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SeriesCategories::class);
    }

//    /**
//     * @return SeriesCategories[] Returns an array of SeriesCategories objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SeriesCategories
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
