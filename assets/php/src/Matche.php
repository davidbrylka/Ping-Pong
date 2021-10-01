<?php

namespace Pingpong\Dada;

class Matche
{
    private array $players;
    private array $sets;

    function __construct(object $player1, object $player2, int $nbSetsToWin)
    {
        $this->players[0] = $player1;
        $this->players[1] = $player2;
        $this->nbSetsToWin = $nbSetsToWin;
    }


    public function StartNewMatch()
    {

        echo ($this->players[0]->GetName() . " joue contre " . $this->players[1]->GetName());
        $this->addSet();

    }
    function addSet()
    {
        $this->sets[] = new NewSet();


    }
    function getCurrentSet()
    {
        return end($this->sets);
    }
}
