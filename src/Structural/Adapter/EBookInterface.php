<?php
namespace App\Structural\Adapter;

interface EBookInterface {
    public function pressNext(): void;
    public function getPage(): array;
    public function unlock(): void;
}
