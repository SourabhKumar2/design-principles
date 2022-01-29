<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\FactoryMethod\Message;

class JSONMessage extends Message
{
    public function getContent(): string
    {
        return '{"JSON]":[]}';
    }
}
