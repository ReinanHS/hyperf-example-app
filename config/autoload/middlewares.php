<?php

declare(strict_types=1);
/**
 * This file is part of a template project.
 *
 * @link     https://github.com/reinanhs/hyperf-example-app
 * @license  https://github.com/reinanhs/hyperf-example-app/LICENSE
 * @author   @reinanhs
 */
return [
    'http' => [
        \Hyperf\Validation\Middleware\ValidationMiddleware::class,
        \Hyperf\Tracer\Middleware\TraceMiddleware::class,
    ],
];
