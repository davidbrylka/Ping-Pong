<?php
namespace Pingpong\Dada;

class Random
{
    public function randomNumber($limitSup)
    {
     return rand(0,$limitSup);
    }
}