<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\InterfaceSegregation\Services;

use Sourabh\DesignPrinciples\InterfaceSegregation\Entity\Entity;

class OrderPersistenceService implements PersistenceService
{
    private $orders = [];

    public function save(Entity $entity): void
    {
        $this->orders[$entity->getId()] = $entity;
    }

    public function delete(Entity $entity): void
    {
        unset($this->orders[$entity->getId()]);
    }

    public function findById(int $id): Entity
    {
        return $this->orders[$id];
    }
}
