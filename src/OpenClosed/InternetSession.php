<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\OpenClosed;

use DateTime;

class InternetSession
{
    /** @var DateTime */
    private $begin;

    /** @var int */
    private $dataUsed;

    /** @var int */
    private $subscriberId;

    public function __construct(int $subscriberId, DateTime $begin, int $dataUsed)
    {
        $this->begin = $begin;
        $this->dataUsed = $dataUsed;
        $this->subscriberId = $subscriberId;
    }

    public function getBegin(): DateTime
    {
        return $this->begin;
    }

    public function getDataUsed(): int
    {
        return $this->dataUsed;
    }

    public function getSubscriberId(): int
    {
        return $this->subscriberId;
    }
}
