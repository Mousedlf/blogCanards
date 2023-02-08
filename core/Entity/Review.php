<?php

namespace Entity;


use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\ReviewRepository;

#[Table(name: "reviews")]
#[TargetRepository(repositoryName: ReviewRepository::class)]
class Review extends AbstractEntity
{
    private int $id;
    private string $content;
    private string $duck_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getDuckId(): string
    {
        return $this->duck_id;
    }

    /**
     * @param string $duck_id
     */
    public function setDuckId(string $duck_id): void
    {
        $this->duck_id = $duck_id;
    }

}