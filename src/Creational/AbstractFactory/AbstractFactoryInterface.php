<?php
namespace App\Creational\AbstractFactory;

interface AbstractFactoryInterface {
    public function createCsvWriter(): CsvInterface;
    public function createJsonWriter(): JsonInterface;
}
