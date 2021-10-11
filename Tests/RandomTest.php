<?php

use PHPUnit\Framework\TestCase;
use Pingpong\Dada\Random;

class RandomTest extends TestCase
{

    public function testValeurRetour()
    {
        $newvar = new Random();
        $this->assertEquals(11, $newvar->randomNumber(20), "Random number");
    }
}
