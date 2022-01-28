<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\Builder;

use DateTime;

//The concrete builder for UserWebDTO
//TODO implement builder
class UserWebDTOBuilder implements UserDTOBuilder
{
    private $fname;
    private $lname;
    private $age;
    private $address;
    private $dto;

    public function withFirstName(string $fname): UserDTOBuilder
    {
        $this->fname = $fname;

        return $this;
    }

    public function withLastName(string $lname): UserDTOBuilder
    {
        $this->lname = $lname;

        return $this;
    }

    public function withBirthday(DateTime $date): UserDTOBuilder
    {
        $this->age = (string)$date->diff(new DateTime())->y;

        return $this;
    }

    public function withAddress(Address $address): UserDTOBuilder
    {
        $this->address = $address->getHouseNumber() . ', ' . $address->getStreet() . "\n" .
            $address->getCity() . "\n" .
            $address->getState() . "\n" .
            $address->getZipcode();

        return $this;
    }

    //method to "assemble" final product
    public function build(): UserDTO
    {
        return $this->dto = new UserWebDTO(
            $this->fname . ' ' . $this->lname,
            $this->address,
            $this->age
        );
    }

    //(optional) method to fetch already built object
    public function getUserDTO(): UserDTO
    {
        return $this->dto;
    }
}
