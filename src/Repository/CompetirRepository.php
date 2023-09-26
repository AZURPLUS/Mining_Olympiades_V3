<?php

namespace App\Repository;

use App\Entity\Competir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Competir>
 *
 * @method Competir|null find($id, $lockMode = null, $lockVersion = null)
 * @method Competir|null findOneBy(array $criteria, array $orderBy = null)
 * @method Competir[]    findAll()
 * @method Competir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Competir::class);
    }

//    /**
//     * @return Competir[] Returns an array of Competir objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Competir
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
