<?php

namespace App\Controller;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Response;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Response as StatusCodes;

#[Controller(prefix: 'health')]
class HealthCheckController
{
    #[RequestMapping(path: 'liveness', methods: ['GET', 'HEAD'])]
    public function liveness(Response $response): ResponseInterface
    {
        return $response->json(['status' => 'ok'])
            ->withStatus(StatusCodes::HTTP_ACCEPTED);
    }

    #[RequestMapping(path: 'readiness', methods: ['GET', 'HEAD'])]
    public function readiness(Response $response): ResponseInterface
    {
        return $response->json(['status' => 'ok'])
            ->withStatus(StatusCodes::HTTP_ACCEPTED);
    }
}