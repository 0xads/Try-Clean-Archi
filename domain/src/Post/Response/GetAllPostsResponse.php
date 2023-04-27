<?php

namespace Domain\Post\Response;

class GetAllPostsResponse
{
    private ?array $posts = null;

    public function setPosts(?array $posts): void
    {
        $this->posts = $posts;
    }

    public function getPosts(): array
    {
        return $this->posts;
    }
}