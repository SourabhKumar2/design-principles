<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\LiskovSubstitution;

class Square extends Rectangle
{
    public function __construct(int $side)
    {
        parent::__construct($side, $side);
    }

    public function setWidth(int $width): void
    {
        $this->setSide($width);
    }

    public function setHeight(int $height): void
    {
        $this->setSide($height);
    }

    public function setSide(int $side): void
    {
        parent::setWidth($side);
        parent::setHeight($side);
    }
}
