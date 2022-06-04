<?php
namespace App\Structural\Bridge;

interface FormatterInterface {
    public function format(string $text): string;
}
