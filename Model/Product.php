<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\Model;

use Macademy\Jumpstart\Api\CategoryInterface;

class Product
{
    function __construct(
        // Use the Magento Object Manager for DI,
        // returns Category and all it's dependencies.
        // Avoid using the "new" keyword or calling the Object Manager directly.
        // https://courses.m.academy/courses/2184079/lectures/49640260
        // Makes use of Constructor Property Promotion
        private CategoryInterface $category,
    ) {}

    function getCategoryName(): string
    {
        return $this->category->getName();
    }
}
