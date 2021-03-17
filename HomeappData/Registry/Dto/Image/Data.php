<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Image;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use Homeapp\HomeappData\Registry\Dto\Image\Attributes as Attributes;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read null|Attributes $attributes;
 */
class Data extends ResourceObject
{
    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\Image\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?Attributes $attributes = null;

    public function __construct(?string $id, ?Attributes $attributes)
    {
        parent::__construct($id, EntityNameEnum::IMAGE);
        $this->attributes = $attributes;
    }
}
