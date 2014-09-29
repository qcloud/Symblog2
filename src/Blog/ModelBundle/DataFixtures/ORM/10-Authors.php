<?php

namespace Blog\ModelBundle\DataFixtures\ORM;

use Blog\ModelBundle\Entity\Author;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Fixtures for the Author entity
 * @package Blog\ModelBundle\DataFixtures\ORM
 */
class Authors extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@InheritDoc}
     */
    function load(ObjectManager $manager)
    {
        $a1 = new Author();
        $a1->setName('Shibly');

        $a2 = new Author();
        $a2->setName('John');

        $a3 = new Author();
        $a3->setName('Eddie');


        $manager->persist($a1);
        $manager->persist($a2);
        $manager->persist($a3);


        $manager->flush();
    }

    /**
     * {@InheritDoc}
     */
    function getOrder()
    {
        return 10;
    }
}