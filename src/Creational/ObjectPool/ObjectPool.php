<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\ObjectPool;

use RuntimeException;

class ObjectPool
{
    private $pool = [];

    public function __construct(string $name, int $count)
    {
        for ($i = 0; $i < $count; ++$i) {
            $this->pool[] = new Bitmap($name);
        }
    }

    public function get(): Image
    {
        if (empty($this->pool)) {
            throw new RuntimeException('Pool is empty');
        }

        return array_shift($this->pool);
    }

    public function release(Image $image)
    {
        $image->reset();
        $this->pool[] = $image;
    }
}
