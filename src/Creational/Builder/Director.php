<?php
namespace App\Creational\Builder;

class Director {
    public function build(VehicleBuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        return $builder->addDoors()
            ->addWheel()
            ->addEngine()
            ->getVehicle();
    }
}
