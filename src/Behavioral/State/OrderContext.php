<?php
namespace App\Behavioral\State;

class OrderContext {

    protected StateInterface $state;

    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }

    public static function create(): OrderContext
    {
        $order = new self();
        $order->state = new CreateState();
        return $order;
    }

    public function nextProceed(): void
    {
        $this->state->nextProceed($this);
    }

    public function __toString()
    {
        return (string) $this->state;
    }

}
