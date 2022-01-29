<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\FactoryMethod;

use Sourabh\DesignPrinciples\Creational\FactoryMethod\Message\JSONMessage;
use Sourabh\DesignPrinciples\Creational\FactoryMethod\Message\Message;

class JSONMessageCreator extends MessageCreator
{
    public function createMessage(): Message
    {
        return new JSONMessage();
    }
}
