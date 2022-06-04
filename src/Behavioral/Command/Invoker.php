<?php
namespace App\Behavioral\Command;

class Invoker {

    protected CommandInterface $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->execute();
    }

}
