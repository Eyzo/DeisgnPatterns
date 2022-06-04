<?php
namespace App\Structural\Adapter;

class EBookAdapter implements BookInterface {

    public function __construct(protected EBookInterface $EBook)
    {
    }

    public function getPage(): int
    {
        return $this->EBook->getPage()[0];
    }

    public function open(): void
    {
        $this->EBook->unlock();
    }

    public function turnPage(): void
    {
        $this->EBook->pressNext();
    }
}
