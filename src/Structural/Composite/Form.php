<?php
namespace App\Structural\Composite;

class Form implements RenderableInterface {
    protected array $elements = [];
    public function addElements(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
    public function render(): string
    {
        $content = '';
        foreach ($this->elements as $element) {
            $content .= $element->render();
        }
        return "<form>".$content ."</form>";
    }
}
