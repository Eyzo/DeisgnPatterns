<?php
namespace App\Creational\Prototype;


class FooBookPrototype extends BookPrototype {
    protected string $category = 'foo';
    public function __clone(): void{}
}
