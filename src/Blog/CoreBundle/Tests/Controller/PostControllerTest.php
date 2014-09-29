<?php

namespace Blog\CoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class PostControllerTest
 * @package Blog\CoreBundle\Tests\Controller
 */
class PostControllerTest extends WebTestCase
{
    /**
     * Tests posts index
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertTure($client->getResponse()->isSuccessful(), 'The response was not successful');
    }

}
