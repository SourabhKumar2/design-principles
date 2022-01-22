<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\SRP;

class User
{
    /** @var string */
    private $name;

    /** @var string */
    private $email;

    /** @var string */
    private $address;

    public function __construct(string $name, string $email, string $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
}
