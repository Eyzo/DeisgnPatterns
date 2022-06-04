<?php
namespace App\Structural\Adapter;

class PaperBook implements BookInterface {

    protected int $pages;

    public function getPage(): int
    {
        return $this->pages;
    }

    public function open(): void
    {
        $this->pages = 1;
    }

    public function turnPage(): void
    {
        $this->pages++;
    }

}
