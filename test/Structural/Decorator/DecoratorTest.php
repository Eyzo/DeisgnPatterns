<?php
namespace App\Test\Structural\Decorator;

use App\Structural\Decorator\DoubleRoomBooking;
use App\Structural\Decorator\ExtraBed;
use App\Structural\Decorator\Wifi;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase {

    public function testWifiDecorate()
    {
        $wifi = new Wifi(new DoubleRoomBooking());
        $this->assertEquals(60, $wifi->calculatePrice());
        $this->assertEquals("Réservation de 2 chambres avec wifi", $wifi->getDescription());
    }

    public function testExtraBedDecorate()
    {
        $extra = new ExtraBed(new DoubleRoomBooking());
        $this->assertEquals(50, $extra->calculatePrice());
        $this->assertEquals("Réservation de 2 chambres avec lits suplémentaire", $extra->getDescription());
    }

}
