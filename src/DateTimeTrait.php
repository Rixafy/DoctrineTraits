<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait DateTimeTrait
{
	#[ORM\Column(nullable: false)]
    private ?DateTime $createdAt = null;

	#[ORM\Column]
    private DateTime $updatedAt;

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
	
	#[ORM\PrePersist]
	#[ORM\PreUpdate]
    public function timestampUpdate()
    {
        $this->updatedAt = new DateTime();

        if ($this->createdAt === null) {
            $this->createdAt = new DateTime();
        }
    }
}
