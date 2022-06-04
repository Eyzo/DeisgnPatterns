<?php
namespace App\Creational\AbstractFactory;

class WinWriterFactory implements AbstractFactoryInterface {
    public function createCsvWriter(): CsvInterface
    {
        return new WinCsv();
    }

    public function createJsonWriter(): JsonInterface
    {
        return new WinJson();
    }
}
