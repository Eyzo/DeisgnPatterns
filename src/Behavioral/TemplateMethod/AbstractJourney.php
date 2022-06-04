<?php
namespace App\Behavioral\TemplateMethod;

abstract class AbstractJourney {

    protected array $thingsToDo = [];

    public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
        if ($this->buyGift()) {
            $this->thingsToDo[] = $this->buyGift();
        }
    }

    abstract protected function enjoyVacation(): string;

    protected function buyGift(): ?string
    {
        return null;
    }

    protected function buyAFlight(): string
    {
        return 'Buy A Flight';
    }

    protected function takePlane(): string
    {
        return 'Take plane';
    }

    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }

}
