<?php
namespace App\Behavioral\TemplateMethod;

class BeachJourney extends AbstractJourney {
    protected function enjoyVacation(): string
    {
        return 'Go To Beach';
    }
}
