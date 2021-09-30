<?php

require 'vendor/autoload.php';

use Pingpong\Dada\Matche;
use Pingpong\Dada\Player;

$PlayerOne=new Player("Bruno");
$PlayerTwo=new Player("Eric");

// Init new match with 3 winning sets

$NewMatch=new Matche($PlayerOne, $PlayerTwo,3);

$NewMatch->StartNewMatch();


?>