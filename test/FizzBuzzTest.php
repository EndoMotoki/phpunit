<?php
require_once './src/FizzBuzz.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_値が100個存在するか()
    {
        $fizzBuzz = new FizzBuzz(100);
        $result = $fizzBuzz->generate();

        $this->assertCount(100,$result); // 100個あるか
    }

    public function test_3の倍数の場合にFizzが返されているか()
    {
        $fizzBuzz = new FizzBuzz(100);
        $result = $fizzBuzz->generate();

        $this->assertEquals('Fizz',$result[2]);
    }

    public function test_5の倍数の場合にBuzzが返されているか()
    {
        $fizzBuzz = new FizzBuzz(100);
        $result = $fizzBuzz->generate();

        $this->assertEquals('Buzz',$result[4]);
    }

    public function test_15の倍数の場合にFizzBuzzが返されているか()
    {
        $fizzBuzz = new FizzBuzz(100);
        $result = $fizzBuzz->generate();

        $this->assertEquals('FizzBuzz',$result[14]);
    }

    public function test_0を指定した場合に空配列が返されているか()
    {
        $fizzBuzz = new FizzBuzz(0);
        $result = $fizzBuzz->generate();

        $this->assertEmpty($result);
    }
}