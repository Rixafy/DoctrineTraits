<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use Doctrine\ORM\Mapping as ORM;

trait SortOrderTrait
{
	#[ORM\Column]
    private int $sortOrder = 0;

    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }
}
