<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\LiskovSubstitution;

class Square implements ShapeInterface
{
    /** @var int */
    private $side;

    public function __construct(int $side)
    {
        $this->side = $side;
    }

    public function getSide(): int
    {
        return $this->side;
    }

    public function setSide(int $side): void
    {
        $this->side = $side;
    }

    public function computeArea(): int
    {
        return $this->getSide() * $this->getSide();
    }
}
