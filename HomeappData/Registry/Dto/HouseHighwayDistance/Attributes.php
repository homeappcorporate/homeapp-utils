<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\HouseHighwayDistance;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read float $distanceCity
 * @property-read float $distanceMkad
 */
class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public float $distanceCity;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public float $distanceMkad;

    public function __construct(float $distanceCity, float $distanceMkad)
    {
        $this->distanceCity = $distanceCity;
        $this->distanceMkad = $distanceMkad;
    }
}
