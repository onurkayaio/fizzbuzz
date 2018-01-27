<?php

require "vendor/autoload.php";

use Controller\FizzBuzz;

$fizzBuzz = new FizzBuzz();

for ($i = 1; $i <= 100; $i++) {
    echo $fizzBuzz->checkNumber($i), '<br/>';
}