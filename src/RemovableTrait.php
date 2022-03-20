<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use Doctrine\ORM\Mapping as ORM;

trait RemovableTrait
{
	#[ORM\Column]
    private bool $isRemoved = false;

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
