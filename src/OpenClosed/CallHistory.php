<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\OpenClosed;

use DateTime;

class CallHistory
{
    /** @var Call[] */
    private static $calls;

    public static function getCurrentCalls(int $subscriberId): array
    {
        if (!self::$calls[$subscriberId]) {
            return [];
        }

        return self::$calls[$subscriberId];
    }

    public static function addSession(int $subscriberId, DateTime $begin, int $duration): void
    {
        self::$calls[$subscriberId][] = new Call($subscriberId, $begin, $duration);
    }
}
