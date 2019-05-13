<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

trait RemovableTrait
{
    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $isRemoved = false;

    public function isRemoved(): bool
    {
        return $this->isRemoved;
    }

    public function remove(): void
    {
        $this->isRemoved = true;
    }

    public function restore(): void
    {
        $this->isRemoved = false;
    }
}
