<?php
namespace App\Test\Behavioral\Strategy;

use App\Behavioral\Strategy\Context;
use App\Behavioral\Strategy\DateComparator;
use App\Behavioral\Strategy\IntComparator;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase {

    public function provideIntegers()
    {
        return [
          [
            [['id' => 2], ['id' => 1], ['id' => 3]],
            ['id' => 1],
          ],
          [
            [['id' => 3], ['id' => 2], ['id' => 1]],
            ['id' => 1],
          ],
        ];
    }

    public function provideDates()
    {
        return [
          [
            [['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']],
            ['date' => '2013-03-01'],
          ],
          [
            [['date' => '2014-02-03'], ['date' => '2013-02-01'], ['date' => '2015-02-02']],
            ['date' => '2013-02-01'],
          ],
        ];
    }

    /**
     * @dataProvider provideIntegers
     */
    public function testStrategyWithIntegers($values, $expected)
    {
        $context = new Context(new IntComparator());
        $values = $context->sort($values);
        $value = array_shift($values);
        $this->assertEquals($expected, $value);
    }

    /**
     * @dataProvider provideDates
     */
    public function testStrategyWith($values, $expected)
    {
        $context = new Context(new DateComparator());
        $values = $context->sort($values);
        $value = array_shift($values);
        $this->assertEquals($expected, $value);
    }

}
