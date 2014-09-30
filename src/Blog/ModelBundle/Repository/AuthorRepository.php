<?php
/**
 * Created by PhpStorm.
 * User: Shibly
 * Date: 10/1/2014
 * Time: 1:02 AM
 */

namespace Blog\ModelBundle\Repository;


use Doctrine\ORM\EntityRepository;

/**
 * Class AuthorRepository
 * @package Blog\ModelBundle\Repository
 */
class AuthorRepository extends EntityRepository
{

    /**
     * Find the first author
     *
     * @return Author
     *
     * @throws \Doctrine\ORM\NoResultException
     *
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findFirst()
    {
        $qb = $this->getQueryBuilder()
            ->orderBy('a.id', 'asc')
            ->setMaxResults(1);
        return $qb->getQuery()->getSingleResult();
    }


    private function getQueryBuilder()
    {
        $em = $this->getEntityManager();
        $qb = $em->getRepository('ModelBundle:Author')
            ->createQueryBuilder('a');
        return $qb;
    }


} 