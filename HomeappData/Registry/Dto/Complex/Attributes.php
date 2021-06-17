<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Complex;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read string $name
 */
class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $fullName;

    public function __construct(string $name, string $fullName)
    {
        $this->name = $name;
        $this->fullName = $fullName;
    }
}
