<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\SRP;

class Store
{
    private static $storage;

    public function store(User $user): void
    {
        self::$storage[$user->getName()] = $user;
    }

    public function getUser(string $name): User
    {
        return self::$storage[$name];
    }
}
