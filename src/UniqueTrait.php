<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use Ramsey\Uuid\UuidInterface;

trait UniqueTrait
{
    /**
     * @var UuidInterface
     *
     * @ORM\Id
     * @ORM\Column(type="uuid_binary_ordered_time", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidOrderedTimeGenerator")
     */
    protected $id;

    public function getId(): ?UuidInterface
    {
        return $this->id;
    }
}
