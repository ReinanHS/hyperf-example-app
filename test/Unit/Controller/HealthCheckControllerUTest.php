<?php

namespace HyperfTest\Unit\Controller;

use App\Controller\HealthCheckController;
use Hyperf\HttpMessage\Server\Response as ServerResponse;
use Hyperf\HttpServer\Response;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response as StatusCodes;

class HealthCheckControllerUTest extends TestCase
{
    public function testLivenessRequestSuccess(): void
    {
        $mockedResponse = new Response(new ServerResponse());

        $controller = new HealthCheckController();
        $response = $controller->liveness($mockedResponse);

        $this->assertEquals(StatusCodes::HTTP_ACCEPTED, $response->getStatusCode());
    }

    public function testReadinessRequestSuccess(): void
    {
        $mockedResponse = new Response(new ServerResponse());

        $controller = new HealthCheckController();
        $response = $controller->liveness($mockedResponse);

        $this->assertEquals(StatusCodes::HTTP_ACCEPTED, $response->getStatusCode());
    }
}