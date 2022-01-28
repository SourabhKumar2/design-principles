<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\Builder;

//Abstract builder
interface UserDTOBuilder
{
    //methods to build "parts" of product at a time
    public function withFirstName(string $fname): UserDTOBuilder;

    public function withLastName(string $lname): UserDTOBuilder;

    public function withBirthday(string $date): UserDTOBuilder;

    public function withAddress(string $address): UserDTOBuilder;

    //method to "assemble" final product
    public function build(): UserDTO;

    //(optional) method to fetch already built object
    public function getUserDTO(): UserDTO;
}
