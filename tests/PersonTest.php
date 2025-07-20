<?php

declare(strict_types=1);

use App\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase{
    public function testGetFullName(){
        $person = new Person();
        $person->setFirstName('John');
        $person->setLastName('Doe');
        $this->assertSame('John Doe', $person->getFullName());
    }
}