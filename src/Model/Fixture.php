<?php

namespace App\Model;

class Fixture
{
    protected $id;

    protected $team1;

    protected $team2;

    protected $location;

    protected $datetime;

    protected $status;

    protected $result;

    public function setId(int $id): Fixture
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setTeam1(Team $team1): Fixture
    {
        $this->team1 = $team1;

        return $this;
    }

    public function getTeam1(): Team
    {
        return $this->team1;
    }

    public function setTeam2(Team $team2): Fixture
    {
        $this->team2 = $team2;

        return $this;
    }

    public function getTeam2(): Team
    {
        return $this->team2;
    }

    public function setLocation(string $location): Fixture
    {
        $this->location = $location;

        return $this;
    }

    public function getLocation(): Team
    {
        return $this->location;
    }

    public function setDatetime(string $datetime): Fixture
    {
        $this->datetime = $datetime;

        return $this;
    }

    public function getDatetime(): string
    {
        return $this->datetime;
    }

    public function setStatus(string $status): Fixture
    {
        $this->status = $status;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setResult(array $result): Fixture
    {
        $this->result = $result;

        return $this;
    }

    public function getResult(): array
    {
        return $this->result;
    }

}