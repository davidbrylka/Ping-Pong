<?php

class NewSet
{
    private $Pointsplayer1=0, $NbSetWinPlayerOne=0;
    private $Pointsplayer2=0, $NbPointsPlayerTwo=0;
    private $NamePlayer1, $NamePlayer2;
  
  
    function __construct($player1, $player2)
    {
        $this->NamePlayer1=$player1;
        $this->NamePlayer2=$player2;

    }

    function PlaySet()
    {

        while ($this->Pointsplayer1 !=3 and $this->Pointsplayer2 != 3) {

                // Simulation des points gagnes
    $aleatoire = rand(0, 9);

    if ($aleatoire > 5) {
        $this->player1->addPoint();
        echo ($this->player1->getName() . " met un point <br>");
    } else {
        $this->player2->addPoint();
        echo ($this->player2->getName() . " met un point <br>");
    }
    // Simulation ending

            // if ($NbPointsPlayerone >= 11 and abs($NbPointsPlayerone - $NbPointsPlayertwo > 1)) {
            //     $this->player1->addset();
            //     $this->player1->clearPoint();
            //     $this->player2->clearPoint();
            //     echo ($this->player1->getName() . " gagne "."<br>");
            // }
            // if ($NbPointsPlayertwo >= 11 and abs($NbPointsPlayertwo - $NbPointsPlayerone > 1)) {
            //     $this->player2->addset();
            //     $this->player2->clearPoint();
            //     $this->player1->clearPoint();
            //     echo ($this->player2->getName() . " gagne "."<br>");
            // }
            echo ("Sets : " . $this->player1->getNbsetswin() . "<br>");
            echo ("Sets : " . $this->player2->getNbSetswin() . "<br>");
        }
        echo ('Fin de match');
    }
}


