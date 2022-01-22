<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\OpenClosed;

use DateTime;

class Call
{
    /** @var DateTime */
    private $begin;

    /** @var int */
    private $duration;

    /** @var int */
    private $subscriberId;

    public function __construct(int $subscriberId, DateTime $begin, int $duration)
    {
        $this->begin = $begin;
        $this->duration = $duration;
        $this->subscriberId = $subscriberId;
    }

    public function getBegin(): DateTime
    {
        return $this->begin;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getSubscriberId(): int
    {
        return $this->subscriberId;
    }
}
