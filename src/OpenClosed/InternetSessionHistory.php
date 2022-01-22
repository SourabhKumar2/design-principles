<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\OpenClosed;

use DateTime;

class InternetSessionHistory
{
    /** @var InternetSession[] */
    private static $sessions;

    public static function getCurrentsessions(int $subscriberId): array
    {
        if (!self::$sessions[$subscriberId]) {
            return [];
        }

        return self::$sessions[$subscriberId];
    }

    public static function addSession(int $subscriberId, DateTime $begin, int $duration): void
    {
        self::$sessions[$subscriberId][] = new Call($subscriberId, $begin, $duration);
    }
}
