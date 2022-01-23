<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\InterfaceSegregation\Entity;

//Base class for all entities
abstract class Entity
{
    /** @var int */
    private $id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
