<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\ObjectPool;

interface Image extends Poolable
{
    public function draw(): void;

    public function getLocation(): Point2D;

    public function setLocation(Point2D $location): void;
}
