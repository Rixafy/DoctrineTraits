<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

trait PublishableTrait
{
    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $isPublished = true;

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
