<?php
namespace App\Test\Behavioral\TemplateMethod;

use App\Behavioral\TemplateMethod\BeachJourney;
use App\Behavioral\TemplateMethod\CityJourney;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase {

    public function testCanGetOnVacationOnTheBeach()
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        $this->assertSame(
          ['Buy A Flight', 'Take plane', 'Go To Beach'],
          $beachJourney->getThingsToDo()
        );
    }

    public function testCanGetOnAJourneyToACity()
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeATrip();

        $this->assertSame(
          [
            'Buy A Flight',
            'Take plane',
            'Take photo',
            'Buy Gift',
          ],
          $cityJourney->getThingsToDo()
        );
    }

}
