<?php
namespace App\Behavioral\State;

class CreateState implements StateInterface {
    public function nextProceed(OrderContext $orderContext): void
    {
        $orderContext->setState(new ShipContext());
    }
    public function __toString(): string
    {
        return 'Create';
    }
}
