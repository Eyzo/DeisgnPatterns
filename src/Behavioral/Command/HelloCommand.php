<?php
namespace App\Behavioral\Command;

class HelloCommand implements CommandInterface {

    public function __construct(protected Recever $recever)
    {
    }

    public function execute(): void
    {
        $this->recever->setText();
    }
}
