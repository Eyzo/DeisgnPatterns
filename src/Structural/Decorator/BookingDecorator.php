<?php
namespace App\Structural\Decorator;

abstract class BookingDecorator implements BookingInterface {
    public function __construct(protected BookingInterface $booking)
    {
    }
}
