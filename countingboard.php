<?php

class Player
{
    public $name;
    private $NbPoints = 0; 

  
    function __construct(string $name)
    {
        $this->name = $name;
    }


    public function getPoints(): int
    {
        return $this->NbPoints;
    }
}
