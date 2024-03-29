<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use Doctrine\ORM\Mapping as ORM;

use Ramsey\Uuid\UuidInterface;

trait UniqueUlidTrait
{
	#[ORM\Id]
	#[ORM\Column(type: 'uuid', unique: true)]
	#[ORM\GeneratedValue(strategy: 'CUSTOM')]
	#[ORM\CustomIdGenerator(class: IdGenerator::class)]
	protected UuidInterface $id;

	public function getId(): UuidInterface
	{
		return $this->id;
	}
}
