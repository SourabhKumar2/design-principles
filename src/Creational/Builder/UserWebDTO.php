<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\Builder;

//A product in builder pattern
class UserWebDTO implements UserDTO
{
    private $name;

    private $address;

    private $age;

    public function __construct(string $name, string $address, string $age)
    {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }

    /**
     * Get the value of name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of address.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Set the value of address.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of age.
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * Set the value of age.
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}
