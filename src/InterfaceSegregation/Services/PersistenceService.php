<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\InterfaceSegregation\Services;

use Sourabh\DesignPrinciples\InterfaceSegregation\Entity\Entity;

//common interface to be implemented by all persistence services.
interface PersistenceService
{
    public function save(Entity $entity): void;

    public function delete(Entity $entity): void;

    public function findById(int $id): Entity;
}
