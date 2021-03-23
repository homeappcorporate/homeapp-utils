<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\AddressBti;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use Homeapp\HomeappData\Registry\Dto\AddressBti\Attributes as Attributes;
use Homeapp\HomeappData\Registry\Dto\AddressBti\Relationships as Relationships;
use JMS\Serializer\Annotation as Serializer;

class Data extends ResourceObject
{
    /**
     * @property-read
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\AddressBti\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?Attributes $attributes = null;

    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\AddressBti\Relationships")
     * @Serializer\Groups({"API"})
     */
    public ?Relationships $relationships = null;

    public function __construct(?string $id, ?Attributes $attributes, ?Relationships $relationships = null)
    {
        parent::__construct($id, EntityNameEnum::ADDRESS_BTI);
        $this->attributes = $attributes;
        $this->relationships = $relationships;
    }
}
