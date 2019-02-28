<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

trait RemovableTrait
{
    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $is_removed = false;

    /**
     * @return bool
     */
    public function isRemoved(): bool
    {
        return $this->is_removed;
    }

    public function remove(): void
    {
        $this->is_removed = true;
    }

    public function restore(): void
    {
        $this->is_removed = false;
    }
}