<?php

namespace Controller;

class FizzBuzz
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function checkNumber($number)
    {
        if ($number % 3 == 0 && $number % 5 == 0) {
            return FizzBuzz::FIZZ . FizzBuzz::BUZZ;
        } elseif ($number % 3 == 0) {
            return FizzBuzz::FIZZ;

        } elseif ($number % 5 == 0) {
            return FizzBuzz::BUZZ;
        } else {
            return $number;
        }
    }
}