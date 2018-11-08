<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    public function getColor(): ?string
    {
        return $this->getTranslation()->getColor();
    }

    public function setColor(string $color): void
    {
        $this->getTranslation()->setColor($color);
    }
}
