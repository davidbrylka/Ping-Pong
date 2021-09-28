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
        
        while ($this->player1->getNbsetswin() !=$this->NbSets and $this->player2->getNbsetswin() != $this->NbSets) {

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

            $NbPointsPlayerone = $this->player1->getPoints();
            $NbPointsPlayertwo = $this->player2->getPoints();

            echo ("Score : " . $this->player1->getPoints() . "<br>");
            echo ("Score : " . $this->player2->getPoints() . "<br>");

            if ($NbPointsPlayerone >= 11 and abs($NbPointsPlayerone - $NbPointsPlayertwo > 1)) {
                $this->player1->addset();
                $this->player1->clearPoint();
                $this->player2->clearPoint();
                echo ($this->player1->getName() . " gagne "."<br>");
            }
            if ($NbPointsPlayertwo >= 11 and abs($NbPointsPlayertwo - $NbPointsPlayerone > 1)) {
                $this->player2->addset();
                $this->player2->clearPoint();
                $this->player1->clearPoint();
                echo ($this->player2->getName() . " gagne "."<br>");
            }
            echo ("Sets : " . $this->player1->getNbsetswin() . "<br>");
            echo ("Sets : " . $this->player2->getNbSetswin() . "<br>");
        }
        echo ('Fin de match');
    }
}
