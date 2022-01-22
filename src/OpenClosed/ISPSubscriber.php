<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\OpenClosed;

class ISPSubscriber extends Subscriber
{
    /** @var int */
    private $freeUsage;

    public function calculateBill(): int
    {
        $sessions = InternetSessionHistory::getCurrentSessions($this->getSubscriberId());
        $totalData = array_reduce($sessions, function (int $sum, InternetSession $internetSession) {
            return $sum += $internetSession->getDataUsed();
        });
        $chargeableData = $totalData - $this->getFreeUsage();

        return $chargeableData * $this->getBaseRate() / 100;
    }

    /**
     * Get the value of freeUsage.
     */
    public function getFreeUsage()
    {
        return $this->freeUsage;
    }

    /**
     * Set the value of freeUsage.
     *
     * @return self
     */
    public function setFreeUsage($freeUsage)
    {
        $this->freeUsage = $freeUsage;

        return $this;
    }
}
