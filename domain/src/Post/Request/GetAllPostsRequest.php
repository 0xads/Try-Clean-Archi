<?php

namespace Domain\Post\Request;

class GetAllPostsRequest
{
    public ?int $authorId;

    public ?int $itemPerPage;

    public ?int $page;
}