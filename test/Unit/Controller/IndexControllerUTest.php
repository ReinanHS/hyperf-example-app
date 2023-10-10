<?php

namespace HyperfTest\Unit\Controller;

use App\Controller\IndexController;
use Hyperf\HttpServer\Request;
use Hyperf\HttpServer\Response;
use PHPUnit\Framework\TestCase;
use Hyperf\HttpMessage\Server\Response as ServerResponse;
use Symfony\Component\HttpFoundation\Response as StatusCodes;

class IndexControllerUTest extends TestCase
{
    public function testIndexRequestSuccess(): void
    {
        $mockedRequest = $this->createMock(Request::class);
        $mockedResponse = new Response(new ServerResponse());

        $mockedRequest->expects($this->once())
            ->method('input')
            ->with('user', 'Hyperf')
            ->willReturn('Hyperf');

        $controller = new IndexController();
        $response = $controller->index($mockedRequest, $mockedResponse);

        $this->assertEquals(StatusCodes::HTTP_OK, $response->getStatusCode());
    }
}