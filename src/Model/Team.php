<?php

namespace App\Model;


class Team
{
    protected $id;

    protected $name;

    public function setId(int $id): Team
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): Team
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

}