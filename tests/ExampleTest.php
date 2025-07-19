<?php

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase{
    public function testTwoValuesAreTheSame(){
        $this->assertSame(1,2);
    }
}


