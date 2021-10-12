<?php

use PHPUnit\Framework\TestCase;
use Pingpong\Dada\Random;

class RandomTest extends TestCase
{

    public function testValeurRetour()
    {
        for ($i = 0; $i < 30; $i++) {
            $newvar = new Random();
            $this->assertNotEquals(10, $newvar->randomNumber(20), "Random number");
        }
    }
}
