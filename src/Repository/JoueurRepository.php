<?php

namespace App\Repository;

use App\Entity\Joueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Joueur>
 *
 * @method Joueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Joueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Joueur[]    findAll()
 * @method Joueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Joueur::class);
    }

    public function getJoueurByCompagnie($compagnie)
    {
        return $this->createQueryBuilder('j')
            ->addSelect('a')
            ->addSelect('d')
            ->addSelect('c')
            ->leftJoin('j.abonnement', 'a')
            ->leftJoin('j.discipline', 'd')
            ->leftJoin('a.compagnie', 'c')
            ->where('a.compagnie = :compagnie')
            ->setParameter('compagnie', $compagnie)
            ->getQuery()->getResult()
            ;
    }
}
