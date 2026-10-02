<?php

namespace App\Repository;

use App\Entity\Notification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class NotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notification::class);
    }

    public function countUnreadByUser(int $userId): int
    {
        $all = $this->findBy([], ['createdAt' => 'DESC']);
        $count = 0;
        foreach ($all as $n) {
            if (!$n->isReadBy($userId)) {
                $count++;
            }
        }
        return $count;
    }

    public function findAllOrdered(): array
    {
        return $this->findBy([], ['createdAt' => 'DESC']);
    }
}