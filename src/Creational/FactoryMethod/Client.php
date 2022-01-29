<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\FactoryMethod;

use Sourabh\DesignPrinciples\RunnerInterface;

class Client implements RunnerInterface
{
    public function run(): void
    {
        echo 'Testing Factory Method.....' . PHP_EOL;

        $this->printMessage(new JSONMessageCreator());
        $this->printMessage(new TextMessageCreator());

        echo 'Done testing Factory Method....' . PHP_EOL;
    }

    public function printMessage(MessageCreator $creator): void
    {
        $message = $creator->getMessage();
        echo $message->getContent() . PHP_EOL;
    }
}
