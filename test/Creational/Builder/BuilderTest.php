<?php
namespace App\Test\Creational\Builder;

use App\Creational\Builder\Car;
use App\Creational\Builder\CarBuilder;
use App\Creational\Builder\Director;
use App\Creational\Builder\Truck;
use App\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase {

    public function testCanBuildTruck()
    {
        $director = new Director();
        $vehicle = $director->build(new TruckBuilder());
        $this->assertInstanceOf(Truck::class, $vehicle);
    }

    public function testCanBuildCar()
    {
        $director = new Director();
        $vehicle = $director->build(new CarBuilder());
        $this->assertInstanceOf(Car::class, $vehicle);
    }

}
