<?php

namespace App\Post\UserInterface\Presenter;

use App\Post\UserInterface\ViewModel\GetAllPostsViewModel;
use Domain\Post\Presenter\GetAllPostsPresenterInterface;
use Domain\Post\Response\GetAllPostsResponse;

class GetAllPostsPresenter implements GetAllPostsPresenterInterface
{
    private GetAllPostsViewModel $viewModel;

    public function present(GetAllPostsResponse $getAllPostsResponse): void
    {
        $this->viewModel = new GetAllPostsViewModel;
        $this->viewModel->posts = $getAllPostsResponse->getPosts();
    }

    public function getViewModel(): GetAllPostsViewModel
    {
        return $this->viewModel;
    }
}