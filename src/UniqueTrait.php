<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use Doctrine\ORM\Mapping as ORM;

use Ramsey\Uuid\Doctrine\UuidGenerator;
use Ramsey\Uuid\UuidInterface;

trait UniqueTrait
{
	#[ORM\Id]
	#[ORM\Column(type: 'uuid_binary', unique: true)]
	#[ORM\GeneratedValue(strategy: 'CUSTOM')]
	#[ORM\CustomIdGenerator(class: UuidGenerator::class)]
    protected UuidInterface $id;

    public function getId(): UuidInterface
    {
        return $this->id;
    }
}
