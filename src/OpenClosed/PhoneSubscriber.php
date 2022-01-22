<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\OpenClosed;

class PhoneSubscriber extends Subscriber
{
    public function calculateBill(): int
    {
        $sessions = CallHistory::getCurrentCalls($this->getSubscriberId());
        $totalDuration = array_reduce($sessions, function (int $sum, Call $call) {
            return $sum += $call->getDuration();
        });

        return $totalDuration * $this->getBaseRate() / 100;
    }
}
