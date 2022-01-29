<?php

declare(strict_types=1);

namespace Sourabh\DesignPrinciples\Creational\SimpleFactory;

use RuntimeException;

class PostFactory
{
    public static function createPost(string $type): Post
    {
        switch ($type) {
            case 'blog':
                return new BlogPost();
            case 'news':
                return new NewsPost();
            case 'product':
                return new ProductPost();
            default:
                throw new RuntimeException('Not allowed type ' . $type);
        }
    }
}
