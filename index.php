<?php

require 'vendor/autoload.php';

use Pingpong\Dada\Matche;
use Pingpong\Dada\Player;
use Pingpong\Dada\Score;

$Players = array(0);

$Players[0] = new Player("Bruno");
$Players[1] = new Player("Eric");
$setwon[0] = 0;
$setwon[1] = 0;

$match = new Matche($Players[0], $Players[1], 3);
$match->StartNewMatch();

$currentSet = $match->getCurrentSet();

do {
  
    if (!$currentSet->isFinished()) {
        $currentSet->addPoint(rand(0, 1));
    } else {                        // If set finished, verify 3 winning sets

        $winner = $currentSet->giveWinner();
        $setwon[$currentSet->giveWinner()]++;
        echo ("set gagné par : " . $Players[$currentSet->giveWinner()]->getName() . "<br> ");

        if ($setwon[$currentSet->giveWinner()] < 3) {
            echo ($setwon[$currentSet->giveWinner()] . " <br>");
            $match->addSet();
            $currentSet = $match->getCurrentSet();
        }
    }
} while ($setwon[$currentSet->giveWinner()]<3);

Echo ("Match gagné par : ".$Players[$currentSet->giveWinner()]->getName());



