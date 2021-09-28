<?php

class Player
{
    public $name;
    private $NbPoints = 0;
    private $Nbsetswin = 0;

    function __construct(string $name)
    {
        $this->name = $name;
    }


    public function getPoints(): int
    {
        return $this->NbPoints;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public  function getNbSetsWin()
    {
        return $this->Nbsetswin;
    }
    public  function addSet()
    {
        $this->Nbsetswin++;
    }
    public function addPoint()
    {
        $this->NbPoints++;
    }
    public function clearPoint()
    {
        $this->NbPoints=0;
    }
}

