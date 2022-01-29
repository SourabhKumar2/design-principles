<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\SimpleFactory;

use DateTimeInterface;

/**
 * Represents a news post.
 */
class NewsPost extends Post
{
    private $headline;

    private $newsTime;

    public function getHeadline(): string
    {
        return $this->headline;
    }

    public function setHeadline(string $headline): void
    {
        $this->headline = $headline;
    }

    public function getNewsTime(): DateTimeInterface
    {
        return $this->newsTime;
    }

    public function setNewsTime(DateTimeInterface $newsTime)
    {
        $this->newsTime = $newsTime;
    }
}
