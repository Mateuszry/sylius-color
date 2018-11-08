<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\ProductTranslation as BaseProductTranslation;
use Sylius\Component\Core\Model\ProductTranslationInterface;

class ProductTranslation extends BaseProductTranslation
{
    /**
     * @var string
     */
    private $color;

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
