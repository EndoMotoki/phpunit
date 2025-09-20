<?php
require_once './src/Calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_sumで1と1を足すと2が返る()
    {
        $calculator = new Calculator();
        $result = $calculator->sum(1,1);

        $this->assertEquals(2,$result);
    }

    public function test_divideで2を0で割るとDivisionByZeroErrorが返る()
    {
        $calculator = new Calculator();
        $this->expectException(\DivisionByZeroError::class);
        $calculator->divide(2,0);
    }
}