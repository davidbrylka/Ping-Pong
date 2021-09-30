<?php

namespace Pingpong\Dada;

class NewSet
{
    private array $Score = array();
    private int $delta;


    function playSet(): int
    {
        $this->Score[0] = 0;
        $this->Score[1] = 0;

        // do {
        for ($i = 0; $i < 10; $i++) {
            $random = rand(0, 1);
            echo $random;

            var_dump($this->Score[0]);
            var_dump($this->Score[1]);
            $this->Score[$random]++;
            var_dump($this->Score[0]);
            var_dump($this->Score[1]);

            // $this->delta = abs($this->Score[0] - $this->Score[1]);
            // } while (($this->Score[0] or $this->Score[1]) and $this->delta > 1);
            // } while (true);
        }
        return $random;
        echo ('Fin de set');
    }
}
