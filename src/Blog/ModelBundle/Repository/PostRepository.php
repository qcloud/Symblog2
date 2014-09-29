<?php
/**
 * Created by PhpStorm.
 * User: Shibly
 * Date: 9/29/2014
 * Time: 10:04 PM
 */

namespace Blog\ModelBundle\Repository;


use Doctrine\ORM\EntityRepository;

/**
 * Class PostRepository
 * @package Blog\ModelBundle\Repository
 */
class PostRepository extends EntityRepository
{
    /**
     * Find latest posts
     *
     * @param int $num How many posts to get
     * @return array
     */
    public function findLatest($num)
    {
        $qb = $this->getQueryBuilder()
            ->orderBy('p.createdAt', 'desc')
            ->setMaxResults($num);

        return $qb->getQuery()->getResult();
    }

    private function getQueryBuilder()
    {
        $em = $this->getEntityManager();
        $qb = $em->getRepository('ModelBundle:Post')
            ->createQueryBuilder('p');
        return $qb;
    }

} 