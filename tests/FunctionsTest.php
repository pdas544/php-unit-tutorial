<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../vendor/autoload.php';

class FunctionsTest extends TestCase{
    public function testAddTwoNegativeNumbers(): void{
        $this->assertSame(-2,add(-1,-1));
    }
    public function testAdd(): void{
        $this->assertSame(3,add(1,2));
    }

    public function testAddTwoPositiveNumbers(): void{
        $this->assertSame(3,add(1,2));
    }

    public function testAddPositiveAndNegativeNumber(): void{
        $this->assertSame(-1,add(1,-2));
    }

}