<?php
namespace App\Behavioral\Strategy;

interface ComparatorInterface {
    public function comparator(array $a, array $b): int;
}
