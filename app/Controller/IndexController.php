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

use Hyperf\HttpServer\Request;
use Hyperf\HttpServer\Response;
use Psr\Http\Message\ResponseInterface;

class IndexController
{
    public function index(Request $request, Response $response): ResponseInterface
    {
        $user = $request->input('user', 'Hyperf');
        $method = $request->getMethod();

        return $response->json([
            'method' => $method,
            'message' => "Hello {$user}.",
        ]);
    }
}
