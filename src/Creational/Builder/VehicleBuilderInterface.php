<?php
namespace App\Creational\Builder;

interface VehicleBuilderInterface {
    public function addDoors(): self;
    public function addWheel(): self;
    public function addEngine(): self;
    public function createVehicle();
    public function getVehicle(): Vehicle;
}
