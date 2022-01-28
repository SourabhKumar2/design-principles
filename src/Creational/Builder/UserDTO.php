<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\Builder;

//Interface implemented by "products"
interface UserDTO
{
    public function getName(): string;

    public function getAddress(): string;

    public function getAge(): string;
}
