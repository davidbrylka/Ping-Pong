<?php
include_once "player.php";
include_once "match.php";


$PlayerOne=new Player("Georges");
var_dump($PlayerOne);
$PlayerTwo=new Player("Henry");
var_dump($PlayerTwo);

echo($PlayerOne->getName()." vs ".$PlayerTwo->Getname()."<br>");

$Match=new Matche($PlayerOne, $PlayerTwo,3);

$Match->StartNewMatch();


?>