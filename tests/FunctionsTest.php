<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require __DIR__ . '/../lib/functions.php';
class FunctionsTest extends TestCase{
    public function testAdd(){
        $this->assertSame(3,add(1,2));
    }
}