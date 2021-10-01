<?php

require 'vendor/autoload.php';

use Pingpong\Dada\Matche;
use Pingpong\Dada\Player;

$PlayerOne=new Player("Bruno");
$PlayerTwo=new Player("Eric");

// Init new match with 3 winning sets

$NewMatch=new Matche($PlayerOne, $PlayerTwo,3);

$NewMatch->StartNewMatch();

// ajput point
// verif set gagnant

do {
    $random = rand(0, 1);

    var_dump($this->Score[0]);
    var_dump($this->Score[1]);
    $this->Score[$random]++;
    var_dump($this->Score[0]);
    var_dump($this->Score[1]);

    $this->delta = abs($this->Score[0] - $this->Score[1]);
    var_dump($this->delta);
} while (($this->Score[0] > 10 or $this->Score[1] > 10) and $this->delta < 2);
