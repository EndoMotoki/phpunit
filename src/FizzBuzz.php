<?php
/**
 * FizzBuzzを実行するクラス
 */
class FizzBuzz
{
    private int $max;

    public function __construct(int $max = 100)
    {
        $this->max = $max;
    }

    /**
     * 結果を配列で返す
     *
     * @return string[]
     */
    public function generate(): array
    {
        $result = [];
        for ($i = 1; $i <= $this->max; $i++) {
            $result[] = $this->fizzBuzzValue($i);
        }
        return $result;
    }

    /**
     * 判定
     */
    private function fizzBuzzValue(int $number): string
    {
        if ($number % 15 === 0) {
            return 'FizzBuzz';
        }
        if ($number % 3 === 0) {
            return 'Fizz';
        }
        if ($number % 5 === 0) {
            return 'Buzz';
        }
        return (string)$number;
    }
}
