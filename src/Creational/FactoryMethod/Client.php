<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\FactoryMethod;

use Sourabh\DesignPrinciples\RunnerInterface;

class Client implements RunnerInterface
{
    public function run(): void
    {
    }

    public static function printMessage(MessageCreator $creator): void
    {
    }
}
