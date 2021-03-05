<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\CityArea;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use JMS\Serializer\Annotation as Serializer;

class Data extends ResourceObject
{
    /**
     * @property-read
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\CityArea\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?Attributes $attributes = null;

    public function __construct(?string $id, ?Attributes $attributes)
    {
        parent::__construct($id, EntityNameEnum::CITY_AREA);
        $this->attributes = $attributes;
    }
}
