<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\FactoryMethod\Message;

abstract class Message
{
    abstract public function getContent(): string;

    public function addDefaultHeaders(): void
    {
        //Adds some default headers
    }

    public function encrypt(): void
    {
        //# Has some code to encrypt the content
    }
}
