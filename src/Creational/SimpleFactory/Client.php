<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\SimpleFactory;

use Sourabh\DesignPrinciples\RunnerInterface;

class Client implements RunnerInterface
{
    public function run(): void
    {
        echo 'Testing Simple Factory.....' . PHP_EOL;

        echo get_class(PostFactory::createPost('blog')) . PHP_EOL;
        echo get_class(PostFactory::createPost('news')) . PHP_EOL;
        echo get_class(PostFactory::createPost('product')) . PHP_EOL;

        echo 'Done testing Simple Factory....' . PHP_EOL;
    }
}
