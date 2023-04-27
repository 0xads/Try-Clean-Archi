<?php

namespace Domain\Post\UseCase;

use Domain\Post\Presenter\GetAllPostsPresenterInterface;
use Domain\Post\Repository\PostRepositoryInterface;
use Domain\Post\Response\GetAllPostsResponse;

class GetAllPostsUseCase
{
    public function __construct(private readonly PostRepositoryInterface $postRepository) 
    {
    }


    public function execute(GetAllPostsPresenterInterface $presenter)
    {
        $getAllPostsResponse = new GetAllPostsResponse();
        $getAllPostsResponse->setPosts($this->postRepository->findAll());

        $presenter->present($getAllPostsResponse);
    }
}