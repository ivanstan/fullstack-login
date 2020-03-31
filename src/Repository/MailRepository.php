<?php

namespace App\Repository;

use App\Entity\Mail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

class MailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mail::class);
    }

    public function findAll($query = null): QueryBuilder
    {
        $builder = $this->createQueryBuilder('m');

        $builder->orderBy('m.created', 'DESC');

        if ($query !== null) {
//            $builder->andWhere('u.email LIKE :query')->setParameter('query', '%'.$query.'%');
        }

        return $builder;
    }
}