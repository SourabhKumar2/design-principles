<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\ObjectPool;

class Point2D
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString(): string
    {
        return sprintf('(x, y) => (%s, %s)', $this->x, $this->y);
    }
}
