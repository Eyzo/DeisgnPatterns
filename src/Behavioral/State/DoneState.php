<?php
namespace App\Behavioral\State;

class DoneState implements StateInterface {
    public function nextProceed(OrderContext $orderContext): void
    {
    }

    public function __toString(): string
    {
        return 'Done';
    }
}
