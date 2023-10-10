<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
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
