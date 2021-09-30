<?php

namespace Pingpong\Dada;

class Matche
{
    private $player1;
    private $player2;
    private $NbSets;

    function __construct(object $player1, object $player2, int $NbSets)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->NbSets = $NbSets;
    }


    public function StartNewMatch()
    {
        echo ($this->player1->GetName() . " joue contre " . $this->player2->GetName());

        $NewSet = new NewSet();
    }
}
