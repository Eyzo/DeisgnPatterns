<?php
namespace App\Creational\Prototype;

abstract class BookPrototype {

    protected string $title;
    protected string $category;

    public abstract function __clone(): void;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self {
        $this->title = $title;
        return $this;
    }

}
