<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

trait ActiveTrait
{
    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $is_active = true;

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->is_active;
    }

    /**
     * @param bool $is_active
     */
    public function setIsActive(bool $is_active): void
    {
        $this->is_active = $is_active;
    }
}