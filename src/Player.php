<?php
namespace Pingpong\Dada;

class Player
{
    private $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    function getName(): string
    {
        return $this->name;
    }

}

