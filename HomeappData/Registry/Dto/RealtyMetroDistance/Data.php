<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\RealtyMetroDistance;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use Homeapp\HomeappData\Registry\Dto\RealtyMetroDistance\Attributes as Attributes;
use Homeapp\HomeappData\Registry\Dto\RealtyMetroDistance\Relationships as Relationships;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read null|Attributes $attributes;
 * @property-read null|Relationships $relationships;
 */
class Data extends ResourceObject
{
    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\RealtyMetroDistance\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?Attributes $attributes = null;

    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\RealtyMetroDistance\Relationships")
     * @Serializer\Groups({"API"})
     */
    public ?Relationships $relationships = null;

    public function __construct(?string $id, ?Attributes $attributes, ?Relationships $relationships)
    {
        parent::__construct($id, EntityNameEnum::REALTY_METRO_DIST);
        $this->attributes = $attributes;
        $this->relationships = $relationships;
    }
}
