<?php

class Calculator
{
    public function sum($a,$b)
    {
        return $a + $b;
    }

    public function divide($a,$b): float|int
    {
        return $a / $b;
    }
}