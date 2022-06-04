<?php
namespace App\Behavioral\Strategy;

class Context {

    public function __construct(protected ComparatorInterface $comparator)
    {
    }

    public function sort(array $values): array
    {
       uasort($values, [$this->comparator, 'comparator']);
       return $values;
    }

}
