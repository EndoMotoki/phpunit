<?php

require_once __DIR__ . '/FizzBuzz.php';
require 'vendor/autoload.php';

$fizzBuzz = new FizzBuzz(100);
$result = $fizzBuzz->generate();
