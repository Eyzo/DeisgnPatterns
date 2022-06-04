<?php
namespace App\Structural\Bridge;

class PingService extends Service {
    public function get(): string
    {
        return $this->formatter->format('pong');
    }
}
