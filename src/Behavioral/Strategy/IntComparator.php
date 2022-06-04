<?php
namespace App\Behavioral\Strategy;

class IntComparator implements ComparatorInterface {
    public function comparator(array $a, array $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}
