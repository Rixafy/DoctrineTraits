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

    public function isActive(): bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): void
    {
        $this->is_active = $is_active;
    }

    public function disable(): void
	{
		$this->is_active = false;
	}

    public function enable(): void
	{
		$this->is_active = true;
	}
}
