<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\Builder;

use DateTime;

//Class used to construct the product
class User
{
    private $firstName;
    private $lastName;
    private $birthday;
    private $address;

    /**
     * Get the value of firstName.
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName.
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName.
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName.
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of birthday.
     */
    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday.
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get the value of address.
     */
    public function getAddress(): Address
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
}
