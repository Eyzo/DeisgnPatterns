<?php
namespace App\Behavioral\ChainOfResponsibilities;

interface RequestInterface {
    public function getMethod(): string;
}
