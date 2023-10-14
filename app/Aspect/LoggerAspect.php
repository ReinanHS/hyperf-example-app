<?php

declare(strict_types=1);
/**
 * This file is part of a template project.
 *
 * @link     https://github.com/reinanhs/hyperf-example-app
 * @license  https://github.com/reinanhs/hyperf-example-app/LICENSE
 * @author   @reinanhs
 */

namespace App\Aspect;

use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;
use Hyperf\Tracer\SwitchManager;
use Hyperf\Tracer\TracerContext;
use OpenTracing\Span;

use const OpenTracing\Formats\TEXT_MAP;

class LoggerAspect extends AbstractAspect
{
    public array $classes = [
        'Monolog\Logger::addRecord',
    ];

    public function __construct(private SwitchManager $switchManager) {}

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        $root = TracerContext::getRoot();

        if ($root instanceof Span && $this->switchManager->isEnable('logger')) {
            $appendContext = [];
            // Injects the context into the wire
            TracerContext::getTracer()->inject(
                $root->getContext(),
                TEXT_MAP,
                $appendContext
            );

            $context = $proceedingJoinPoint->arguments['keys']['context'];
            $context['opentracing-context'] = $appendContext;

            $proceedingJoinPoint->arguments['keys']['context'] = $context;
        }

        return $proceedingJoinPoint->process();
    }
}
