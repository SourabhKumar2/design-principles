<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\InterfaceSegregation\Entity;

use DateTime;

class Order extends Entity
{
    /** @var DateTime */
    private $orderPlacedOn;

    /** @var int */
    private $totalValue;

    public function getOrderPlacedOn(): DateTime
    {
        return $this->orderPlacedOn;
    }

    public function setOrderPlacedOn(DateTime $orderPlacedOn): void
    {
        $this->orderPlacedOn = $orderPlacedOn;
    }

    public function getTotalValue(): int
    {
        return $this->totalValue;
    }

    public function setTotalValue(int $totalValue): void
    {
        $this->totalValue = $totalValue;
    }
}
