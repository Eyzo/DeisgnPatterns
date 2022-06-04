<?php
namespace App\Behavioral\Mediator;

class Ui extends AbstractColleague {

    public function getUserName(): string
    {
        return $this->mediator->getUserName();
    }


}
