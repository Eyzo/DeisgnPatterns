<?php
namespace App\Test\Behavioral\Observer;

use App\Behavioral\Observer\User;
use App\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase {

    public function testObserver()
    {
        $observer = new UserObserver();
        $user = new User();
        $user->attach($observer);
        $user->setEmail('lol@gmail.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }

}
