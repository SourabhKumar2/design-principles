<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\InterfaceSegregation\Entity;

use DateTime;

class User extends Entity
{
    /** @var string */
    private $name;

    /** @var DateTime */
    private $lastLogin;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLastLogin(): DateTime
    {
        return $this->lastLogin;
    }

    public function setLastLogin(DateTime $lastLogin): void
    {
        $this->lastLogin = $lastLogin;
    }
}
