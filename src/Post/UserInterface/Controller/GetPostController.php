<?php

namespace App\Post\UserInterface\Controller;

use App\Post\UserInterface\Presenter\GetAllPostsPresenter;
use Domain\Post\Entity\Post;
use Domain\Post\UseCase\GetAllPostsUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/posts', name: 'get_post')]
class GetPostController extends AbstractController
{

    public function __construct(
        private readonly GetAllPostsUseCase $getAllPostsUseCase,
        private readonly GetAllPostsPresenter $presenter)
    {
        
    }

    public function __invoke(): JsonResponse
    {
        $this->getAllPostsUseCase->execute($this->presenter);

        $getAllPostsViewModel = $this->presenter->getViewModel();

        return new JsonResponse(
            [
                'data' => array_map(fn (Post $post) => $post->toArray(), $getAllPostsViewModel->posts),
            ]
        );

    }
}
