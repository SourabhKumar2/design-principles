<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\ObjectPool;

use Sourabh\DesignPrinciples\RunnerInterface;

class Client implements RunnerInterface
{
    private $bitmapPool;

    public function __construct()
    {
        $this->bitmapPool = new ObjectPool('logo.bmp', 5);
    }

    public function run(): void
    {
        echo 'Testing Object Pool.....' . PHP_EOL;

        $b1 = $this->bitmapPool->get();
        $b1->setLocation(new Point2D(10, 10));

        $b2 = $this->bitmapPool->get();
        $b2->setLocation(new Point2D(-10, 0));

        $b1->draw();
        $b2->draw();

        $this->bitmapPool->release($b1);
        $this->bitmapPool->release($b2);

        echo 'Done testing Object Pool....' . PHP_EOL;
    }
}
