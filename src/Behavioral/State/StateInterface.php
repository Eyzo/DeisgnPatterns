<?php
namespace App\Behavioral\State;

interface StateInterface {
    public function nextProceed(OrderContext $orderContext): void;
    public function __toString(): string;
}
