<?php

declare(strict_types=1);


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Doctrine\ORM\Mapping\Entity;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Uid\Ulid;

class UlidGenerator extends AbstractIdGenerator
{
	/**
	 * Generate an identifier
	 *
	 * @param EntityManager $em
	 * @param Entity $entity
	 *
	 * @return UuidInterface
	 *
	 * @throws Exception
	 */
	public function generate(EntityManager $em, $entity)
	{
		return Uuid::fromBytes((new Ulid())->toBinary());
	}
}
