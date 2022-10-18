<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use Doctrine\ORM\Mapping\Entity;
use Exception;
use Ramsey\Uuid\UuidInterface;
use Rixafy\Uuid\Generator\UuidGenerator;

class IdGenerator extends AbstractIdGenerator
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
		return UuidGenerator::uuid7();
	}
}
