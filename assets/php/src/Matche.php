<?php

namespace Pingpong\Dada;

class Matche
{
    private array $players;
    private int $nbSets;
    private array $setWon;

    function __construct(object $player1, object $player2, int $nbSets)
    {
        $this->players[0] = $player1;
        $this->players[1] = $player2;
        $this->nbSets = $nbSets;
    }


    public function StartNewMatch()
    {
        echo ($this->players[0]->GetName() . " joue contre " . $this->players[1]->GetName());

        $NewSet = new NewSet();

        do
        {
            

        }
        while ($setWon[0]=$this->nbSets or $setWon[1]=$this->nbSets);
    }


}
