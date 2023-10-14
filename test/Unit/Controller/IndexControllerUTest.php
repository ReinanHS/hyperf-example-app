<?php

declare(strict_types=1);
/**
 * This file is part of a template project.
 *
 * @link     https://github.com/reinanhs/hyperf-example-app
 * @license  https://github.com/reinanhs/hyperf-example-app/LICENSE
 * @author   @reinanhs
 */

namespace HyperfTest\Unit\Controller;

use App\Controller\IndexController;
use Hyperf\Config\Config;
use Hyperf\HttpMessage\Server\Response as ServerResponse;
use Hyperf\HttpServer\Request;
use Hyperf\HttpServer\Response;
use Hyperf\Logger\Logger;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response as StatusCodes;

/**
 * @internal
 * @coversNothing
 */
class IndexControllerUTest extends TestCase
{
    public function testIndexRequestSuccess(): void
    {
        $mockedRequest = $this->createMock(Request::class);
        $mockedResponse = new Response(new ServerResponse());

        $mockedLogger = $this->createMock(Logger::class);
        $mockedConfig = $this->createMock(Config::class);

        $mockedRequest->expects($this->once())
            ->method('input')
            ->with('user', 'Hyperf')
            ->willReturn('Hyperf');

        $mockedLogger->expects($this->once())
            ->method('debug')
            ->with('Requisição de experimento realizada com sucesso');

        $mockedConfig->expects($this->once())
            ->method('get')
            ->with('app_version')
            ->willReturn('v0.0.0');

        $controller = new IndexController($mockedLogger, $mockedConfig);
        $response = $controller->index($mockedRequest, $mockedResponse);

        $this->assertEquals(StatusCodes::HTTP_OK, $response->getStatusCode());
    }
}
