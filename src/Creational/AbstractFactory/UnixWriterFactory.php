<?php
namespace App\Creational\AbstractFactory;

class UnixWriterFactory implements AbstractFactoryInterface {
    public function createCsvWriter(): CsvInterface
    {
        return new UnixCsv();
    }

    public function createJsonWriter(): JsonInterface
    {
        return new UnixJson();
    }
}
