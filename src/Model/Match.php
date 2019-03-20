<?php

namespace App\Model;

class Match extends Fixture
{
    protected $id;

    protected $playersTeam1;

    protected $playersTeam2;

    // Example A: Not linking to another class, using in this class as array
    protected $goalsTeam1;

    // Example A: Not linking to another class, using in this class as array
    protected $goalsTeam2;

    // Example B: Linking to another class
    protected $cards;

    public function setId(int $id): Fixture
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setPlayersTeam1(array $playersTeam1): Match
    {
        $this->playersTeam1 = $playersTeam1;

        return $this;
    }

    public function addPlayerTeam1(Player $player): Match
    {
        return $this->playersTeam1[] = $player;
    }

    public function getPlayersTeam1(): Match
    {
        return $this->playersTeam1;
    }

    public function setPlayersTeam2(array $playersTeam2): Match
    {
        $this->playersTeam2 = $playersTeam2;

        return $this;
    }

    public function addPlayerTeam2(Player $player): Match
    {
        return $this->playersTeam2[] = $player;
    }

    public function getPlayersTeam2(): Match
    {
        return $this->playersTeam2;
    }

    public function setGoalsTeam1(array $goalsTeam1): Match
    {
        $this->goalsTeam1 = $goalsTeam1;

        return $this;
    }

    public function addGoalTeam1(Player $player, string $datetime): Match
    {
        return $this->goalsTeam1[] = ['player' => $player, 'datetime' => $datetime];
    }

    public function getGoalsTeam1(): Match
    {
        return $this->goalsTeam1;
    }

    public function setGoalsTeam2(array $goalsTeam2): Match
    {
        $this->goalsTeam2 = $goalsTeam2;

        return $this;
    }

    public function addGoalTeam2(Player $player, string $datetime): Match
    {
        return $this->goalsTeam2[] = ['player' => $player, 'datetime' => $datetime];
    }

    public function getGoalsTeam2(): Match
    {
        return $this->goalsTeam1;
    }

    public function setCards(array $cards): Match
    {
        $this->cards = $cards;

        return $this;
    }

    public function addCard(Card $card): Match
    {
        return $this->card[] = $card;
    }

    public function getCards(): Match
    {
        return $this->cards;
    }



}