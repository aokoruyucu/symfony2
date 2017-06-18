<?php

namespace CekirdekBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class PostControllerTest
 * @package CekirdekBundle\Tests\Controllerp
 */
class PostControllerTest extends WebTestCase
{

    /**
     * Test post index
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isSuccessful(),'The Responsenot successfull');
    }

}
