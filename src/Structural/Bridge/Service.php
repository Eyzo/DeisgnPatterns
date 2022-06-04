<?php
namespace App\Structural\Bridge;

abstract class Service {
    public function __construct(protected FormatterInterface $formatter)
    {
    }
    public abstract function get(): string;
}
