<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use DateTime;

trait DateTimeTrait
{
    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    private $updated_at;

    public function getCreatedAt(): ?DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(DateTime $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(DateTime $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function timestampUpdate()
    {
        $this->updated_at = new DateTime();

        if ($this->created_at === null) {
            $this->created_at = new DateTime();
        }
    }
}