<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\Singleton;

use Sourabh\DesignPrinciples\RunnerInterface;

class Client implements RunnerInterface
{
    public function run(): void
    {
        echo 'Testing Singleton.....' . PHP_EOL;

        $instance1 = Registery::getInstance();
        $instance2 = Registery::getInstance();

        echo($instance1 === $instance2 ? 'Success' : 'Failed') . PHP_EOL;

        echo 'Done testing Singleton....' . PHP_EOL;
    }
}
