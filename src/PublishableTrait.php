<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use Doctrine\ORM\Mapping as ORM;

trait PublishableTrait
{
	#[ORM\Column]
    private bool $isPublished = true;

    public function isPublished(): bool
    {
        return $this->isPublished;
    }

    public function publish(): void
    {
        $this->isPublished = true;
    }

    public function hide(): void
    {
        $this->isPublished = false;
    }
}
