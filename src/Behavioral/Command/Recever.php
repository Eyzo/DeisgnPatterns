<?php
namespace App\Behavioral\Command;

class Recever {

    protected string $text;

    public function setText()
    {
        $this->text = 'Hello world';
    }

    public function getText()
    {
        return $this->text;
    }

}
