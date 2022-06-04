<?php
namespace App\Behavioral\State;

class ShipContext implements StateInterface {
    public function nextProceed(OrderContext $orderContext): void
    {
        $orderContext->setState(new DoneState());
    }

    public function __toString(): string
    {
        return 'Ship';
    }
}
