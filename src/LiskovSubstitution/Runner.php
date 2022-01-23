<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\LiskovSubstitution;

use Sourabh\DesignPrinciples\RunnerInterface;

class Runner implements RunnerInterface
{
    public function run(): void
    {
        echo 'Testing Liskov Substitution.....' . PHP_EOL;

        $rectangle = new Rectangle(10, 20);
        echo $rectangle->computeArea() . PHP_EOL;

        $square = new Square(10);
        echo $square->computeArea() . PHP_EOL;

        $this->useRectangle($rectangle);

        echo 'Done testing Liskov Substitution....' . PHP_EOL;
    }

    private function useRectangle(Rectangle $rectangle): void
    {
        $rectangle->setHeight(20);
        $rectangle->setWidth(30);

        if ($rectangle->getHeight() !== 20) {
            echo 'Height Not equal to 20' . PHP_EOL;
        }
        if ($rectangle->getWidth() !== 30) {
            echo 'Width Not equal to 30' . PHP_EOL;
        }
    }
}
