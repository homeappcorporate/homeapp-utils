<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Image;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read string $path
 */
class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }
}
