<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\ObjectPool;

interface Poolable
{
    public function reset(): void;
}
