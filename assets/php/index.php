<?php

require 'vendor/autoload.php';

use Pingpong\Dada\Matche;
use Pingpong\Dada\Player;

$PlayerOne=new Player("Eric");
var_dump($PlayerOne);
$PlayerTwo=new Player("Laurent");
var_dump($PlayerTwo);

echo($PlayerOne->getName()." vs ".$PlayerTwo->Getname()."<br>");

$Match=new Matche($PlayerOne, $PlayerTwo,3);

$Match->StartNewMatch();

?>