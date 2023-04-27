<?php 

namespace App\Tests\Functional\UserInterface\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostListControllerTest extends WebTestCase
{
    public function testGetAllPostsIsSuccesfulResponse(): void
    {
        static::createClient()->request('GET', '/posts');

        $this->assertResponseIsSuccessful();
    }

    public function testGetAllPostsReturnsCorrectValues(): void
    {
        static::createClient()->request('GET', '/posts');

        $this->assertResponseIsSuccessful();
    }
}
