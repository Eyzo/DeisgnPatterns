<?php
namespace App\Creational\Singleton;

class Singleton {

    protected static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (!self::$instance) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }

}
