<?php

namespace MainBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
    public function recup(){
        $qb = $this->createQueryBuilder('u')
            ->select('u.id','u.username', 'u.password','u.email', 'u.isActive')
            ->getQuery();

        return $qb->getResult();
    }
}
