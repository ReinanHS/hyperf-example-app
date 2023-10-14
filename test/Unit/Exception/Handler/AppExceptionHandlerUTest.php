<?php

declare(strict_types=1);
/**
 * This file is part of a template project.
 *
 * @link     https://github.com/reinanhs/hyperf-example-app
 * @license  https://github.com/reinanhs/hyperf-example-app/LICENSE
 * @author   @reinanhs
 */

namespace HyperfTest\Unit\Exception\Handler;

use App\Exception\Handler\AppExceptionHandler;
use Hyperf\Framework\Logger\StdoutLogger;
use Hyperf\HttpMessage\Server\Response as ServerResponse;
use Hyperf\HttpServer\Response;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class AppExceptionHandlerUTest extends TestCase
{
    public function testAppExceptionHandler()
    {
        $mockedResponse = new Response(new ServerResponse());
        $mockedLogger = $this->createMock(StdoutLogger::class);
        $exception = new \Exception('Exception Handler Teste');

        $mockedLogger->expects($this->exactly(2))
            ->method('error');

        $exceptionHandler = new AppExceptionHandler($mockedLogger);
        $response = $exceptionHandler->handle($exception, $mockedResponse);

        $this->assertEquals(500, $response->getStatusCode());
    }
}
