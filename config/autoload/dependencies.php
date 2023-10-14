<?php

declare(strict_types=1);
/**
 * This file is part of a template project.
 *
 * @link     https://github.com/reinanhs/hyperf-example-app
 * @license  https://github.com/reinanhs/hyperf-example-app/LICENSE
 * @author   @reinanhs
 */
use Hyperf\Logger\LoggerFactory;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

use function Hyperf\Config\config;

return [
    LoggerInterface::class => function (ContainerInterface $container) {
        $appName = config('app_name');
        $factory = $container->get(LoggerFactory::class);

        return $factory->get($appName);
    },
];
