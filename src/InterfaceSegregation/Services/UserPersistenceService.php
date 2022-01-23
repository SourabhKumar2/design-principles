<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\InterfaceSegregation\Services;

use Sourabh\DesignPrinciples\InterfaceSegregation\Entity\Entity;
use Sourabh\DesignPrinciples\InterfaceSegregation\Entity\User;

//Stores User entities
class UserPersistenceService implements PersistenceService
{
    /** @var array */
    private $users = [];

    public function save(Entity $entity): void
    {
        $this->users[$entity->getId()] = $entity;
    }

    public function delete(Entity $entity): void
    {
        unset($this->users[$entity->getId()]);
    }

    public function findById(int $id): Entity
    {
        return $this->users[$id];
    }

    public function findByName(string $name): array
    {
        return array_filter($this->users, function (User $user) use ($name) {
            return $name === $user->getName();
        });
    }
}
