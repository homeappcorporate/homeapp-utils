<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\RealtyImage;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\JsonApi\Attributes\AttributesInterface;
use Homeapp\JsonApi\Meta\Meta;
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
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\RealtyImage\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?AttributesInterface $attributes = null;

    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\RealtyImage\Relationships")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsInterface $relationships = null;

    public function __construct(?string $id, ?AttributesInterface $attributes, ?RelationshipsInterface $relationships, Meta $meta = null)
    {
        parent::__construct($id, EntityNameEnum::REALTY_IMAGE, $meta);
        $this->attributes = $attributes;
        $this->relationships = $relationships;
    }
}
