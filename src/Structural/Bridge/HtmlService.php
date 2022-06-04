<?php
namespace App\Structural\Bridge;

class HtmlService extends Service {
    public function get(): string
    {
        return $this->formatter->format('hello world');
    }
}
