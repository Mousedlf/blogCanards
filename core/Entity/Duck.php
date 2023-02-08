<?php

namespace Entity;

use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\DuckRepository;

#[Table(name: "ducks")]
#[TargetRepository(repositoryName: DuckRepository::class)]
class Duck extends AbstractEntity
{
    private int $id;
    private string $name;
    private string $description;

    // private string $image; + getter et setter

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }




}