<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\Singleton;

class Registery
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
