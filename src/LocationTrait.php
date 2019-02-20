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

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function setLocation(float $latitude, float $longitude): void
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}
