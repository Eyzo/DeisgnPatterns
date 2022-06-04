<?php
namespace App\Structural\Decorator;

class ExtraBed extends BookingDecorator {
    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + 10;
    }
    public function getDescription(): string
    {
        return $this->booking->getDescription() . " avec lits suplémentaire";
    }
}
