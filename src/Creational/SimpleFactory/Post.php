<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\SimpleFactory;

use DateTimeInterface;

/**
 * Abstract post class. Represents a generic post on a web site.
 */
abstract class Post
{
    private $id;

    private $title;

    private $content;

    private $createdOn;

    private $publishedOn;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getCreatedOn(): DateTimeInterface
    {
        return $this->createdOn;
    }

    public function setCreatedOn(DateTimeInterface $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    public function getPublishedOn(): DateTimeInterface
    {
        return $this->publishedOn;
    }

    public function setPublishedOn(DateTimeInterface $publishedOn): void
    {
        $this->publishedOn = $publishedOn;
    }
}
