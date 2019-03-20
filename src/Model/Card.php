<?php

namespace App\Model;


class Card
{
    protected $id;

    protected $type; // Yellow or Red

    protected $player;

    public function setId(int $id): Card
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setType(string $type): Card
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setPlayer(Player $player): Card
    {
        $this->player = $player;

        return $this;
    }

    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function setDatetime(string $datetime): Card
    {
        $this->datetime = $datetime;

        return $this;
    }

    public function getDatetime(): string
    {
        return $this->datetime;
    }

}