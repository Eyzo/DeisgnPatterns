<?php
namespace App\Creational\Prototype;

class BarBookPrototype extends BookPrototype {
    protected string $category = 'bar';
    public function __clone(): void{}
}
