<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use Doctrine\ORM\Mapping as ORM;

trait ActiveTrait
{
	#[ORM\Column]
    private bool $isActive = true;

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
