<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

trait SortOrderTrait
{
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $sort_order = 0;

    public function getSortOrder(): int
    {
        return $this->sort_order;
    }

    public function setSortOrder(int $sort_order): void
    {
        $this->sort_order = $sort_order;
    }
}
