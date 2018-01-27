<?php

namespace FizzBuzzControllerTest;

use Controller\FizzBuzz;
use PHPUnit_Framework_TestCase;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testCheckNumber()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals(1, $fizzBuzz->checkNumber(1));
        $this->assertEquals(FizzBuzz::FIZZ, $fizzBuzz->checkNumber(3));
        $this->assertEquals(FizzBuzz::BUZZ, $fizzBuzz->checkNumber(5));
        $this->assertEquals(FizzBuzz::FIZZ . FizzBuzz::BUZZ, $fizzBuzz->checkNumber(15));
        $this->assertEquals(49, $fizzBuzz->checkNumber(49));
    }
}