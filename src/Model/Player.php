<?php

namespace App\Model;


class Player
{
    protected $id;

    protected $name;

    public function setId(int $id): Player
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): Player
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

}