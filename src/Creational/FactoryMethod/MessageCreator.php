<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\FactoryMethod;

use Sourabh\DesignPrinciples\Creational\FactoryMethod\Message\Message;

abstract class MessageCreator
{
    public function getMessage(): Message
    {
        $message = $this->createMessage();
        $message->addDefaultHeaders();
        $message->encrypt();

        return $message;
    }

    abstract public function createMessage(): Message;
}
