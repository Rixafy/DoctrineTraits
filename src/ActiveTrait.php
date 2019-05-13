<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

trait ActiveTrait
{
    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $isActive = true;

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function disable(): void
	{
		$this->isActive = false;
	}

    public function enable(): void
	{
		$this->isActive = true;
	}
}
