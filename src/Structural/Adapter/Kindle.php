<?php
namespace App\Structural\Adapter;

class Kindle implements EBookInterface {

    protected int $page = 1;
    protected int $totalPages = 100;

    public function pressNext(): void
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }

    public function unlock(): void
    {
    }
}
