<?php

declare(strict_types=1);
/**
 * This file is part of a template project.
 *
 * @link     https://github.com/reinanhs/hyperf-example-app
 * @license  https://github.com/reinanhs/hyperf-example-app/LICENSE
 * @author   @reinanhs
 */

namespace HyperfTest\Feature\Controller;

use HyperfTest\HttpTestCase;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Response as StatusCodes;

/**
 * @internal
 * @coversNothing
 */
class IndexControllerFTest extends HttpTestCase
{
    public function testTheApplicationReturnSuccessfulResponse(): void
    {
        /** @var ResponseInterface $response */
        $response = $this->request('GET', '/');

        $this->assertEquals(StatusCodes::HTTP_OK, $response->getStatusCode());
        $this->assertEquals('application/json; charset=utf-8', $response->getHeaderLine('Content-Type'));

        $expectContent = [
            'method' => 'GET',
            'message' => 'Hello Hyperf.',
            'version' => 'v0.0.0',
        ];

        $content = json_decode($response->getBody()->getContents(), true);
        $this->assertEquals($expectContent, $content);
    }
}
