<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\Builder;

use DateTime;
use Sourabh\DesignPrinciples\RunnerInterface;

//This is our client which also works as "director"
class Client implements RunnerInterface
{
    public function run(): void
    {
        echo 'Testing Builder Pattern.....' . PHP_EOL;

        $user = $this->createUser();
        $builder = new UserWebDTOBuilder();

        $userDto = $this->directBuild($builder, $user);

        echo $userDto . PHP_EOL;

        echo 'Done testing Builder Pattern....' . PHP_EOL;
    }

    /**
     * Returns a sample user.
     */
    private function createUser(): User
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

    private function directBuild(UserDTOBuilder $builder, User $user): UserDTO
    {
        return $builder->withFirstName($user->getFirstName())
        ->withLastName($user->getLastName())
        ->withAddress($user->getAddress())
        ->withBirthday($user->getBirthday())
        ->build();
    }
}
