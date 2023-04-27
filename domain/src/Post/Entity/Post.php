<?php

namespace Domain\Post\Entity;

class Post
{
    protected int $id;
    protected string $content;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function toArray(): ?array
    {
        $array = [
            'id' => $this->getId(),
            'content' => $this->getContent()
        ];

        return $array;
    }

}