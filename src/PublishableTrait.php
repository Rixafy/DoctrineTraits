<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

trait PublishableTrait
{
    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $is_published = true;

    public function isPublished(): bool
    {
        return $this->is_published;
    }

    public function publish(): void
    {
        $this->is_published = true;
    }

    public function hide(): void
    {
        $this->is_published = false;
    }
}
