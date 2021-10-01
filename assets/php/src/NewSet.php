<?php

namespace Pingpong\Dada;

class NewSet
{
    private array $points = array(0, 0);
    private bool $deltaScorePlayers;

    function addPoint(int $playerNumber): void
    {
        $this->points[$playerNumber]++;
    }

    function isFinished(): bool
    {
        $deltaScorePlayers = (abs($this->points[0] - $this->points[1]) > 1);
        $moreThanEleven = ($this->points[0] >= 11 or $this->points[1] >= 11);
        return $deltaScorePlayers and $moreThanEleven;
    }
    
    function getPoints(int $playerNumber): int
    {
        return $this->points[$playerNumber];
    }

    function giveWinner(): bool
    {
        return $this->points[0]>$this->points[1];
    }
}
