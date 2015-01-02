<?php

namespace Amce\FilmBundle\Repository;

use Doctrine\ORM\EntityRepository;

class FilmRepository extends EntityRepository
{
	 public function findAll()
    {
        return $this->createQueryBuilder("f");
    }
}