<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\SRP;

class UserParser
{
    public function parse(string $json): User
    {
        $userJson = json_decode($json, true);

        return new User($userJson['name'], $userJson['email'], $userJson['address']);
    }
}
