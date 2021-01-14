<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\HouseHighwayDistance;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read int $distanceCity
 * @property-read int $distanceMkad
 */
class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $distanceCity;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $distanceMkad;

    public function __construct(int $distanceCity, int $distanceMkad)
    {
        $this->distanceCity = $distanceCity;
        $this->distanceMkad = $distanceMkad;
    }
}
