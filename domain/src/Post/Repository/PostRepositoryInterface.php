<?php

namespace Domain\Post\Repository;

interface PostRepositoryInterface
{
    public function findAll(): array;
}