<?php
namespace App\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver {

    protected array $changedUsers = [];

    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = $subject;
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }

}
