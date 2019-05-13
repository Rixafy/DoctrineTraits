<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

trait SortOrderTrait
{
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $sortOrder = 0;

    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }
}
