<?php
namespace App\Behavioral\Mediator;

abstract class AbstractColleague {

    protected MediatorInterface $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

}
