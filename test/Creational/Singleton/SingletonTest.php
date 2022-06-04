<?php
namespace App\Test\Creational\Singleton;

use App\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase {

    public function testIfSameInstance()
    {
        $singleton1 = Singleton::getInstance();
        $singleton2 = Singleton::getInstance();
        $this->assertSame($singleton1, $singleton2);
    }

}
