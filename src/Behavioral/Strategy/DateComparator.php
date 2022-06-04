<?php
namespace App\Behavioral\Strategy;

class DateComparator implements ComparatorInterface {
    public function comparator(array $a, array $b): int
    {
        $dateA = new \DateTime($a['date']);
        $dateB = new \DateTime($b['date']);
        return $dateA <=> $dateB;
    }
}
