<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\RealtyMetroDistance;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read integer $distance
 * @property-read integer $time
 * @property-read string $method
 */
class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $distance;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $time;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $method;

    public function __construct(int $distance, int $time, string $method)
    {
        $this->distance = $distance;
        $this->time = $time;
        $this->method = $method;
    }
}
