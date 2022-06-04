<?php
namespace App\Structural\Decorator;

class Wifi extends BookingDecorator {
    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + 20;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription(). " avec wifi";
    }
}
