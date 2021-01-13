<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\CityArea;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\JsonApi\Attributes\AttributesInterface;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read null|Attributes $attributes;
 */
class Data extends ResourceObject
{
    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\CityArea\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?AttributesInterface $attributes = null;

    public function __construct(?string $id, ?AttributesInterface $attributes)
    {
        parent::__construct($id, EntityNameEnum::CITY_AREA);
        $this->attributes = $attributes;
    }
}