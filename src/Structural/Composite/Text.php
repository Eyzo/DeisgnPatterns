<?php
namespace App\Structural\Composite;

class Text implements RenderableInterface {
    public function __construct(protected string $text)
    {
    }
    public function render(): string
    {
        return $this->text.": ";
    }
}
