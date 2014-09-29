<?php
namespace Blog\ModelBundle\DataFixtures\ORM;

use Blog\ModelBundle\Entity\Post;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Fixtures for the Post entity
 * @package Blog\ModelBundle\DataFixtures\ORM
 */
class Posts extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * {@InheritDoc}
     */
    function load(ObjectManager $manager)
    {
        $p1 = new Post();
        $p1->setTitle('First Post');
        $p1->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet mattis nunc at malesuada.
        Integer vitae mattis enim. Curabitur aliquam sed quam non maximus. Cras tristique tellus eros, sit amet blandit erat ultricies non.
        Quisque fringilla ipsum vestibulum convallis pharetra. Nam ac enim vitae justo condimentum viverra eget nec tellus.
        In id ligula quis dui fermentum ullamcorper. Aenean leo metus, rutrum lacinia porta a, sollicitudin in nisi.
        Nullam imperdiet purus nunc, at suscipit elit blandit nec. Maecenas sit amet ante eget neque euismod varius.
        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        Duis ornare lectus vel ligula interdum interdum. Nam vitae suscipit ipsum. Donec sit amet lectus et diam consectetur efficitur a ac nunc.');
        $p1->setAuthor($this->getAuthor($manager, 'Shibly'));


        $p2 = new Post();
        $p2->setTitle('Second Post');
        $p2->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet mattis nunc at malesuada.
        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        Duis ornare lectus vel ligula interdum interdum. Nam vitae suscipit ipsum. Donec sit amet lectus et diam consectetur efficitur a ac nunc.');
        $p2->setAuthor($this->getAuthor($manager, 'John'));


        $p3 = new Post();
        $p3->setTitle('Third Post');
        $p3->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet mattis nunc at malesuada.
        Duis ornare lectus vel ligula interdum interdum. Nam vitae suscipit ipsum. Donec sit amet lectus et diam consectetur efficitur a ac nunc.');
        $p3->setAuthor($this->getAuthor($manager, 'Eddie'));


        $manager->persist($p1);
        $manager->persist($p2);
        $manager->persist($p3);

        $manager->flush();
    }


    /**
     * Get an Author
     * @param ObjectManager $manager
     * @param string $name
     * @return Author
     */
    private function getAuthor(ObjectManager $manager, $name)
    {
        return $manager->getRepository('ModelBundle:Author')->findOneBy(
            array(
                'name' => $name
            )
        );

    }

    /**
     * {@InheritDoc}
     */
    function getOrder()
    {
        return 15;
    }
}