<?php

namespace Pingpong\Dada;

class NewSet
{
    private array $points = array(0, 0);
    private int $deltaPlayers;

    function addPoint($playerNumber): void
    {
        $this->points[$playerNumber]++;
    }
    function isFinished(): bool
    {
        $deltaPlayers = abs($this->points[0] - $this->points[1]);
        return $this->points[0] >= 11 || $this->points[1] >= 11;
    }
}
