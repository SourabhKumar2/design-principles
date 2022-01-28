<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\Builder;

use DateTime;

//This is our client which also works as "director"
class Client
{
    /**
     * Returns a sample user.
     */
    public static function createUser(): User
    {
        $user = new User();
        $user->setBirthday(new DateTime('1960-05-06'));
        $user->setFirstName('Ron');
        $user->setLastName('Swanson');
        $address = new Address();
        $address->setHouseNumber('100');
        $address->setStreet('State Street');
        $address->setCity('Pawnee');
        $address->setState('Indiana');
        $address->setZipcode('47998');
        $user->setAddress($address);

        return $user;
    }
}
