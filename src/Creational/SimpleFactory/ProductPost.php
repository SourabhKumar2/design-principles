<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\SimpleFactory;

/**
 * Represents a product information post.
 */
class ProductPost extends Post
{
    private $imageUrl;

    private $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }
}
