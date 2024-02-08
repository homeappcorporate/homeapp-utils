<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\MetroStation;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read string $name
 * @property-read string $color
 * @property-read int $extId
 */
class Attributes implements AttributesInterface
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $name;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $color;

    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $extId;

    public function __construct(string $name, string $color, int $extId)
    {
        $this->name = $name;
        $this->color = $color;
        $this->extId = $extId;
    }
}
