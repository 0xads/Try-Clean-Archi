<?php

namespace Domain\Post\Presenter;

use App\Post\UserInterface\ViewModel\GetAllPostsViewModel;
use Domain\Post\Response\GetAllPostsResponse;

interface GetAllPostsPresenterInterface
{
    public function present(GetAllPostsResponse $response): void;

    public function getViewModel();
}