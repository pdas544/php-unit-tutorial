<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
require __DIR__ . '/../vendor/autoload.php';

class FunctionsTest extends TestCase{
    public static function dataProvider(): array{
        return [
            'add two negative integers' => [-1,-1,-2],
            'add two positive integers'=>[2,2,4],
            'add negative and positive integer' => [3,-1,2],
        ];
    }

    #[DataProvider('dataProvider')]
    public function testAddTwoIntegers(int $a, int $b, int $expected): void{
        $this->assertSame($expected,add($a,$b));
    }

}