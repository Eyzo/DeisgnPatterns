<?php
namespace App\Behavioral\Mediator;

class UserRepository extends AbstractColleague {

    public function getUserName(): string
    {
        return $this->mediator->getUserName();
    }

}
