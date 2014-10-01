<?php

namespace Blog\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Blog\ModelBundle\Entity\Comment;


/**
 * Fixtures for the Comment Entity
 * @package Blog\ModelBundle\DataFixtures\ORM
 */
class Comments extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     *
     * {@inheritDoc}
     */
    function load(ObjectManager $manager)
    {
        $posts = $manager->getRepository('ModelBundle:Post')->findAll();
        $comments = array(
            0 => 'First Comment',
            1 => 'Second Comment',
            2 => 'Third Comment'
        );
        $i = 0;
        foreach ($posts as $post) {
            $comment = new Comment();
            $comment->setAuthorName('Someone');
            $comment->setBody($comments[$i++]);
            $comment->setPost($post);

            $manager->persist($comment);
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * {@inheritDoc}
     */
    function getOrder()
    {
        return 20;
    }
}