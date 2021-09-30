<?php

namespace Pingpong\Dada;

class NewSet
{
    private array $Score = array(0);
    private int $delta;

    function playSet(): int
    {
        do {
            $random = rand(0, 1);

            $this->Score[$random] = 5;

            $this->delta = abs($this->Score[0] - $this->Score[1]);
        } while (($this->Score[0] or $this->Score[1]) and $this->delta > 1);

        return 0;
        echo ('Fin de set');
    }
}
