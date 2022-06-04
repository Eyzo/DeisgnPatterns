<?php
namespace App\Behavioral\TemplateMethod;

class CityJourney extends AbstractJourney {

    protected function buyGift(): ?string
    {
        return 'Buy Gift';
    }

    protected function enjoyVacation(): string
    {
        return 'Take photo';
    }
}
