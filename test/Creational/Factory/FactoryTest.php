<?php
namespace App\Test\Creational\Factory;

use App\Creational\Factory\FileLogger;
use App\Creational\Factory\LoggerFactory;
use App\Creational\Factory\LoggerInterface;
use App\Creational\Factory\StdoutLogger;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase {

    public function testFactoryCreateInstanceOfFileLogger() {
        $factory = new LoggerFactory();
        $logger = $factory->createFileLogger();
        $this->assertInstanceOf(FileLogger::class, $logger);
    }

    public function testFactoryCreateInstanceOfStdoutLogger() {
        $factory = new LoggerFactory();
        $logger = $factory->createStdoutLogger();
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testFactoryCreateInstanceOfSameInterface() {
        $factory = new LoggerFactory();
        $logger1 = $factory->createStdoutLogger();
        $logger2 = $factory->createFileLogger();
        $this->assertInstanceOf(LoggerInterface::class, $logger1);
        $this->assertInstanceOf(LoggerInterface::class, $logger2);
    }

}
