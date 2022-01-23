<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\LiskovSubstitution;

interface ShapeInterface
{
    public function computeArea(): int;
}
