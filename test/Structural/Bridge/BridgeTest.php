<?php
namespace App\Test\Structural\Adapter;

use App\Structural\Bridge\HtmlFormatter;
use App\Structural\Bridge\HtmlService;
use App\Structural\Bridge\PingService;
use App\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase {

    public function testGetWithPlainTextFormatter()
    {
        $service = new PingService(new PlainTextFormatter());
        $this->assertEquals('pong', $service->get());
    }

    public function testGetWithHtmlFormatter()
    {
        $service = new HtmlService(new HtmlFormatter());
        $this->assertEquals("<p>hello world</p>", $service->get());
    }

}
