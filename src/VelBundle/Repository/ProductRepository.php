<?php

namespace VelBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class ProductRepository
 * @package VelBundle\Repository
 */
class ProductRepository extends EntityRepository
{
    /**
     * @return array
     */
    public function findAll()
    {
        return $this->findBy([], ['id' => 'ASC']);
    }
}
