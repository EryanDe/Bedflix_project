<?php

namespace App\Repository;

use App\Entity\UserFilms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserFilms>
 *
 * @method UserFilms|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserFilms|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserFilms[]    findAll()
 * @method UserFilms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserFilmsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserFilms::class);
    }

//    /**
//     * @return UserFilms[] Returns an array of UserFilms objects
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

//    public function findOneBySomeField($value): ?UserFilms
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
