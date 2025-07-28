<?php

declare(strict_types=1);

use App\Person;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class PersonTest extends TestCase{
    public function testGetFullName(){
        $person = new Person();
        $person->setFirstName('John');
        $person->setLastName('Doe');
        $this->assertSame('John Doe', $person->getFullName());
    }

    #[Test]
    public function FullNameWithoutSurname(){
        $person = new Person();
        $person->setFirstName('John');
        $this->assertSame('John', $person->getFullName());

    }
}