<?php
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
        
        while ($this->player1->getNbsetswin() !=3 or $this->player2->getNbsetswin() != 3) {

            // Simulation des points gagnes
            $aleatoire = rand(0, 9);

            if ($aleatoire >= 5) {
                $this->player1->addPoint();
                echo ($this->player1->getName() . " met un point <br>");
            } else {
                $this->player2->addPoint();
                echo ($this->player2->getName() . " met un point <br>");
            }
            // Simulation ending

            echo ("Score : " . $this->player1->getPoints() . "<br>");
            echo ("Score : " . $this->player2->getPoints() . "<br>");
            echo ("Sets : " . $this->player1->getNbsetswin() . "<br>");
            echo ("Sets : " . $this->player2->getNbSetswin() . "<br>");

            $NbPointsPlayerone = $this->player1->getPoints();
            $NbPointsPlayertwo = $this->player2->getPoints();


            if ($NbPointsPlayerone >= 11 and ($NbPointsPlayerone - $NbPointsPlayertwo > 1)) {
                $this->player1->addset();
                $this->player1->clearPoint();
                $this->player2->clearPoint();
                echo ($this->player1->getName() . " gagne "."<br>");
            }
            if ($NbPointsPlayertwo >= 11 and ($NbPointsPlayertwo - $NbPointsPlayerone > 1)) {
                $this->player2->addset();
                $this->player2->clearPoint();
                $this->player1->clearPoint();
                echo ($this->player2->getName() . " gagne "."<br>");
            }
        }
        echo ('Fin de match');
    }
}
