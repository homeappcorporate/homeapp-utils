<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Address;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read string $fullAddress
 * @property-read float $lat
 * @property-read float $lng
 */
class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $fullAddress;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public float $lat;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public float $lng;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $city = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $region = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $street = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $house = null;

    public function __construct(string $fullAddress, float $lat, float $lng)
    {
        $this->fullAddress = $fullAddress;
        $this->lat = $lat;
        $this->lng = $lng;
    }
}
