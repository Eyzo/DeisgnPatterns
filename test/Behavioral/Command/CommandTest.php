<?php
namespace App\Test\Behavior\Command;

use App\Behavioral\Command\HelloCommand;
use App\Behavioral\Command\Invoker;
use App\Behavioral\Command\Recever;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase {

    public function testIfReceiverIsFeed()
    {
        $invoker = new Invoker();
        $recever = new Recever();
        $invoker->setCommand(new HelloCommand($recever));
        $invoker->run();
        $this->assertEquals('Hello world', $recever->getText());
    }

}
