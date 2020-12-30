<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\RealtyImage;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read null|string $title
 * @property-read string $group
 * @property-read bool $isPinned
 */
class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $title;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $group;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public bool $isPinned;

    public function __construct(?string $title, string $group, bool $isPinned)
    {
        $this->title = $title;
        $this->group = $group;
        $this->isPinned = $isPinned;
    }
}
