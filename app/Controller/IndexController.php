<?php

declare(strict_types=1);
/**
 * This file is part of a template project.
 *
 * @link     https://github.com/reinanhs/hyperf-example-app
 * @license  https://github.com/reinanhs/hyperf-example-app/LICENSE
 * @author   @reinanhs
 */

namespace App\Controller;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Engine\Exception\HttpClientException;
use Hyperf\HttpServer\Request;
use Hyperf\HttpServer\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

class IndexController
{
    public function __construct(private LoggerInterface $logger, private ConfigInterface $config) {}

    public function index(Request $request, Response $response): ResponseInterface
    {
        $user = $request->input('user', 'Hyperf');
        $method = $request->getMethod();

        if ($user == 'error') {
            $this->logger->error('Foi detectado um novo erro de exemplo na aplicação');
            throw new HttpClientException();
        }

        $this->logger->info('Requisição de experimento realizada com sucesso');
        return $response->json([
            'method' => $method,
            'message' => "Hello {$user}.",
            'version' => $this->config->get('app_version'),
        ]);
    }
}
