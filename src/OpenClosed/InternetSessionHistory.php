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
        return $this->duration;
    }

    public function getSubscriberId(): int
    {
        return $this->subscriberId;
    }
}
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
