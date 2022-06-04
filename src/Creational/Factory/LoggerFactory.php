<?php
namespace App\Creational\Factory;

class LoggerFactory {

    public function createFileLogger(): LoggerInterface
    {
        return new FileLogger();
    }

    public function createStdoutLogger(): LoggerInterface
    {
        return new StdoutLogger();
    }

}
