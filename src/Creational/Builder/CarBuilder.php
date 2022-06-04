<?php
namespace App\Creational\Builder;

class CarBuilder implements VehicleBuilderInterface {

    protected Car $car;

    public function addDoors(): VehicleBuilderInterface
    {
        $this->car->setParts('frontLeftDoor', 'frontLeftDoor');
        $this->car->setParts('frontRightDoor', 'frontRightDoor');
        $this->car->setParts('backLeftDoor', 'backLeftDoor');
        $this->car->setParts('backRightDoor', 'backRightDoor');
        return $this;
    }

    public function addWheel(): VehicleBuilderInterface
    {
        $this->car->setParts('wheel', 'wheel');
        return $this;
    }

    public function addEngine(): VehicleBuilderInterface
    {
        $this->car->setParts('engine', 'engine');
        return $this;
    }

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }

}
