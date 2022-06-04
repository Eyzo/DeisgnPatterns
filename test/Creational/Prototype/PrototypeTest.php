<?php
namespace App\Test\Creational\Prototype;

use App\Creational\Prototype\BarBookPrototype;
use App\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{

    public function testCanGetFooBook()
    {
        $barBook = new BarBookPrototype();
        $fooBook = new FooBookPrototype();

        for ($i = 0; $i < 10; $i++) {
           $book = clone $barBook;
           $book->setTitle("Title n°".$i);
           $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
        for ($i = 0; $i < 5; $i++) {
            $book = clone $fooBook;
            $book->setTitle("Title n°". $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }
    }

}
