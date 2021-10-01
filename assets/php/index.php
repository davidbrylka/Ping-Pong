<?php

require 'vendor/autoload.php';

use Pingpong\Dada\Matche;
use Pingpong\Dada\Player;
use Pingpong\Dada\Score;

$Players = array(0, 0);

$Players[0] = new Player("Bruno");
$Players[1] = new Player("Eric");

var_dump($Players);

// die();

// Init new match with 3 winning sets

$NewMatch = new Matche($Players[0], $Players[1], 3);
$NewMatch->StartNewMatch();

$currentSet = $NewMatch->getCurrentSet();

for ($i = 0; $i < 200; $i++) {

    if (!$currentSet->isFinished()) {
        $currentSet->addPoint(rand(0, 1));
    } else {                        // If set finished, verify 3 winning sets

         echo ("set gagné par : ".$Players[$currentSet->giveWinner()]->getName());
    }
}


var_dump($currentSet);


die();




// do {
//     $random = rand(0, 1);

//     var_dump($this->Score[0]);
//     var_dump($this->Score[1]);
//     $this->Score[$random]++;
//     var_dump($this->Score[0]);
//     var_dump($this->Score[1]);

//     $this->delta = abs($this->Score[0] - $this->Score[1]);
//     var_dump($this->delta);
// } while (($this->Score[0] > 10 or $this->Score[1] > 10) and $this->delta < 2);
