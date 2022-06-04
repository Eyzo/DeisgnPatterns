<?php
namespace App\Creational\Builder;

abstract class Vehicle {
    protected array $parts = [];
    public function setParts(string $key, mixed $data) {
        $this->parts[$key] = $data;
    }
}
