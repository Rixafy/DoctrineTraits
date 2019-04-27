<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

trait LocationTrait
{
    /**
     * @ORM\Column(type="float")
     * @var float
     */
    private $latitude = 0;

    /**
     * @ORM\Column(type="float")
     * @var float
     */
    private $longitude = 0;

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function setLocation(float $latitude, float $longitude): void
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}
