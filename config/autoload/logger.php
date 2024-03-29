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
    'default' => [
        'handler' => [
            'class' => Monolog\Handler\StreamHandler::class,
            'constructor' => [
                'stream' => 'php://stdout',
                'messageType' => Monolog\Handler\ErrorLogHandler::OPERATING_SYSTEM,
                'level' => Monolog\Level::Info,
            ],
        ],
        'formatter' => [
            'class' => Monolog\Formatter\GoogleCloudLoggingFormatter::class,
            'constructor' => [
                'includeStacktraces' => true,
            ],
        ],
        'PsrLogMessageProcessor' => [
            'class' => Monolog\Processor\PsrLogMessageProcessor::class,
        ],
        'processors' => [
            new Monolog\Processor\GitProcessor(),
            new Monolog\Processor\MemoryUsageProcessor(),
            new Monolog\Processor\ProcessIdProcessor(),
        ],
    ],
    'test' => [
        'handler' => [
            'class' => Monolog\Handler\StreamHandler::class,
            'constructor' => [
                'stream' => BASE_PATH . '/runtime/logs/hyperf.log',
                'messageType' => Monolog\Handler\ErrorLogHandler::OPERATING_SYSTEM,
                'level' => Monolog\Level::Debug,
            ],
        ],
        'formatter' => [
            'class' => Monolog\Formatter\LineFormatter::class,
            'constructor' => [
                'includeStacktraces' => true,
            ],
        ],
        'PsrLogMessageProcessor' => [
            'class' => Monolog\Processor\PsrLogMessageProcessor::class,
        ],
        'processors' => [
            new Monolog\Processor\MemoryUsageProcessor(),
        ],
    ],
];
