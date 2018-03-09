<?php

namespace AppBundle\Repository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function customFindAll()
    {
//        $qb = $this->createQueryBuilder('p');
//
//        try {
//            return $qb->select($qb->expr()->max())
//                ->getQuery()
//                ->getSingleScalarResult();
//        } catch (NoResultException $e) {
//            return $e;
//        } catch (NonUniqueResultException $e) {
//            return $e;
//        }
    }

    public function getArticleSortRang()
    {
        return $queryBuilder = $this
            ->createQueryBuilder('p')
            ->orderBy('p.rang', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function searchArticle($search)
    {
        return $queryBuilder = $this
            ->createQueryBuilder('p')
            ->andWhere('p.title LIKE :er')
            ->orderBy('p.rang', 'DESC')
            ->setParameter('er', '%'.$search.'%')
            ->getQuery()
            ->getResult();
    }
}