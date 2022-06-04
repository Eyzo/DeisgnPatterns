<?php
namespace App\Test\Behavioral\State;

use App\Behavioral\State\OrderContext;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase {

    public function testInitialState()
    {
       $orderContext =  OrderContext::create();
       $this->assertEquals('Create', (string) $orderContext);
    }

    public function testNextState()
    {
        $orderContext = OrderContext::create();
        $orderContext->nextProceed();
        $this->assertEquals('Ship', (string) $orderContext);
    }

    public function testNextNextState()
    {
        $orderContext = OrderContext::create();
        $orderContext->nextProceed();
        $orderContext->nextProceed();
        $this->assertEquals('Done', (string) $orderContext);
    }

    public function testManyNextState()
    {
        $orderContext = OrderContext::create();
        $orderContext->nextProceed();
        $orderContext->nextProceed();
        $orderContext->nextProceed();
        $orderContext->nextProceed();
        $this->assertEquals('Done', (string) $orderContext);
    }

}
