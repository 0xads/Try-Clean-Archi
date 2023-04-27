<?php

namespace Domain\Tests\Unit\Entity;

use Domain\Post\Entity\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    public function testToArrayReturnsCorrectValues()
    {
        $post = new Post();
        $post->setId(1);
        $post->setContent('Content');

        $result = $post->toArray();

        $this->assertIsArray($result);
        $this->assertArrayHasKey('id', $result);
        $this->assertEquals(1, $result['id']);
        $this->assertArrayHasKey('content', $result);
        $this->assertEquals('Content', $result['content']);
    }
}