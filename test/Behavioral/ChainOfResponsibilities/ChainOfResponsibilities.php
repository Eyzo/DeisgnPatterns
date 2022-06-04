<?php
namespace App\Test\Behavior\ChainOfResponsibilities;

use App\Behavioral\ChainOfResponsibilities\GetMiddleware;
use App\Behavioral\ChainOfResponsibilities\PostMiddleware;
use App\Behavioral\ChainOfResponsibilities\RequestInterface;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilities extends TestCase {


    public function testIfRequestIsHandleByPostMiddlewareWithRightReturn()
    {
        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('POST');
        $postMiddleware = new PostMiddleware();
        $this->assertEquals('La méthode utilisé est POST', $postMiddleware->handle($request));
    }

    public function testIfRequestIsHandleByGetMiddlewareWithWrongReturn()
    {
        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('POST');
        $getMiddleware = new GetMiddleware();
        $this->assertNull($getMiddleware->handle($request));
    }

    public function testIfRequestIsHandleByMultipleMiddlewaresWithRightReturn()
    {
        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('POST');
        $chain = new GetMiddleware();
        $chain->append(new PostMiddleware());
        $this->assertEquals('La méthode utilisé est POST', $chain->handle($request));
    }

    public function testIfRequestIsHandleByMultipleMiddlewaresWithWrongReturn()
    {
        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')->willReturn('DELETE');
        $chain = new GetMiddleware();
        $chain->append(new PostMiddleware());
        $this->assertNull($chain->handle($request));
    }

}
