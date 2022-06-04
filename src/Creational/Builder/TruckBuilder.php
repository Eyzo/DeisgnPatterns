<?php
namespace App\Creational\Builder;

class TruckBuilder implements VehicleBuilderInterface {

    protected Truck $truck;

    public function addDoors(): VehicleBuilderInterface
    {
        $this->truck->setParts('frontLeftDoor', 'frontLeftDoor');
        $this->truck->setParts('frontRightDoor', 'frontRightDoor');
        return $this;
    }

    public function addWheel(): VehicleBuilderInterface
    {
        $this->truck->setParts('wheel', 'wheel');
        return $this;
    }

    public function addEngine(): VehicleBuilderInterface
    {
        $this->truck->setParts('engine', 'engine');
        return $this;
    }

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }

}
