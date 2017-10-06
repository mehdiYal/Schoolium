<?php

namespace SchoolBundle\Repository;

/**
 * ClasseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClasseRepository extends \Doctrine\ORM\EntityRepository
{

	public function findById($id)
    {
        $qb = $this->createQueryBuilder('c');
      
        $qb->where('c.id = :id')
              ->setParameter('id', $id);
        return $qb;
    }  
}
