<?php

declare(strict_types=1);
/**
 * This file is part of a template project.
 *
 * @link     https://github.com/reinanhs/hyperf-example-app
 * @license  https://github.com/reinanhs/hyperf-example-app/LICENSE
 * @author   @reinanhs
 */

namespace App\Listener;

use Hyperf\Command\Event\AfterExecute;
use Hyperf\Coordinator\Constants;
use Hyperf\Coordinator\CoordinatorManager;
use Hyperf\Event\Annotation\Listener;
use Hyperf\Event\Contract\ListenerInterface;

#[Listener]
class ResumeExitCoordinatorListener implements ListenerInterface
{
    public function listen(): array
    {
        return [
            AfterExecute::class,
        ];
    }

    public function process(object $event): void
    {
        CoordinatorManager::until(Constants::WORKER_EXIT)->resume();
    }
}
