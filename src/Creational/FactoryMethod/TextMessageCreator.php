<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\FactoryMethod;

use Sourabh\DesignPrinciples\Creational\FactoryMethod\Message\Message;
use Sourabh\DesignPrinciples\Creational\FactoryMethod\Message\TextMessage;

/**
 * Provides implementation for creating Text messages.
 */
class TextMessageCreator extends MessageCreator
{
    public function createMessage(): Message
    {
        return new TextMessage();
    }
}
