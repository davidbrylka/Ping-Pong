<?php
namespace Pingpong\Dada;

class Score{
    private int $scoreValue=0;

    function getScore()
    {
        return $this->scoreValue;
    }

    function incrementScore()
    {
        $this->scoreValue++;
    }
}
?>
