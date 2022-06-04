<?php
namespace App\Structural\Facade;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}
