<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\ObjectPool;

//concrete reusable
class Bitmap implements Image
{
    private $location;

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function draw(): void
    {
        echo 'Drawing ' . $this->name . ' @ ' . $this->location;
    }

    public function getLocation(): Point2D
    {
        return $this->location;
    }

    public function setLocation(Point2D $location): void
    {
        $this->location = $location;
    }
}
