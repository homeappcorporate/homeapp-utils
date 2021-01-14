<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\HouseHighwayDistance;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\JsonApi\Attributes\AttributesInterface;
use Homeapp\JsonApi\Relationships\RelationshipsInterface;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read null|Attributes $attributes;
 * @property-read null|Relationships $relationships;
 */
class Data extends ResourceObject
{
    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\HouseHighwayDistance\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?AttributesInterface $attributes = null;

    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\HouseHighwayDistance\Relationships")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsInterface $relationships = null;

    public function __construct(?string $id, ?AttributesInterface $attributes, ?RelationshipsInterface $relationships)
    {
        parent::__construct($id, EntityNameEnum::HOUSE_HIGHWAY_DISTANCE);
        $this->attributes = $attributes;
        $this->relationships = $relationships;
    }
}
