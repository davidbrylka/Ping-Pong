<?php

require 'vendor/autoload.php';

use Pingpong\Dada\Matche;
use Pingpong\Dada\Player;
use Pingpong\Dada\Score;

$Players = array(0, 0);

$Players[0] = new Player("Bruno");
$Players[1] = new Player("Eric");
$Setwon[0] = 0;
$Setwon[1] = 0;


// die();

// Init new match with 3 winning sets

$match = new Matche($Players[0], $Players[1], 3);
$match->StartNewMatch();

$currentSet = $match->getCurrentSet();

for ($i = 0; $i < 200; $i++) {

    if (!$currentSet->isFinished()) {
        $ran = rand(0, 1);
        $currentSet->addPoint($ran);
    } else {                        // If set finished, verify 3 winning sets

        var_dump($currentSet->getPoints(0));
        var_dump($currentSet->getPoints(1));
        $winner = $currentSet->giveWinner();
        echo ($winner . " <br>");
        echo ("set gagné par : " . $Players[$currentSet->giveWinner()]->getName() . " <br> ");
        $Setwon[$currentSet->giveWinner()]++;
        echo ("Il a gagné : " . $Setwon[$currentSet->giveWinner()] . " <br>");
        $match->addSet();
        $currentSet = $match->getCurrentSet();
    }
}


var_dump($currentSet);


die();
