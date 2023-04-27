<?php

namespace App\Post\Infrastructure\Repository;

use Domain\Post\Entity\Post;
use Domain\Post\Repository\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function findAll(): array
    {

        $posts = [];
        for($i = 1; $i < 10; $i++) {
            $post = new Post();
            $post->setId($i);
            $post->setContent('Lorem ipsum number '. $i);
            $posts[] = $post;
        }

        return $posts;
    }
}