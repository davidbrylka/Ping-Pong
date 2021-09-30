<?php

namespace Pingpong\Dada;

class Matche
{
    private array $players;
    private int $nbSets;
    private array $setWon = array(0);
    private int $setNumberWon;

    function __construct(object $player1, object $player2, int $nbSets)
    {
        $this->players[0] = $player1;
        $this->players[1] = $player2;
        $this->nbSets = $nbSets;
    }


    public function StartNewMatch()
    {

        echo ($this->players[0]->GetName() . " joue contre " . $this->players[1]->GetName());

        // Init a new Set
        $currentSet = new NewSet();

        // Boucle jusqu'a qu'un Set des joueurs atteignent NbSets;
        do {
            $setNumberWon = $currentSet->playset();
            $this->setWon[$setNumberWon]++;
        } while ($this->setWon[$setNumberWon] = $this->nbSets);
        

    }
}
