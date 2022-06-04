<?php
namespace App\Test\Creational\AbstractFactory;

use App\Creational\AbstractFactory\AbstractFactoryInterface;
use App\Creational\AbstractFactory\CsvInterface;
use App\Creational\AbstractFactory\JsonInterface;
use App\Creational\AbstractFactory\UnixWriterFactory;
use App\Creational\AbstractFactory\WinWriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase {

    public function dataProvider()
    {
        return [
          [new WinWriterFactory()],
          [new UnixWriterFactory()]
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testIfAbstractFactoryReturnSameInterface(AbstractFactoryInterface $abstractFactory)
    {
        $this->assertInstanceOf(JsonInterface::class, $abstractFactory->createJsonWriter());
        $this->assertInstanceOf(CsvInterface::class, $abstractFactory->createCsvWriter());
    }

}
