<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Complex;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use JMS\Serializer\Annotation as Serializer;

class Data extends ResourceObject
{
    /**
     * @property-read
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\Complex\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?Attributes $attributes = null;

    /**
     * @property-read
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\Complex\Relationships")
     * @Serializer\Groups({"API"})
     */
    public ?Relationships $relationships = null;

    public function __construct(?string $id, ?Attributes $attributes, ?Relationships $relationships = null)
    {
        parent::__construct($id, EntityNameEnum::COMPLEX);
        $this->attributes = $attributes;
        $this->relationships = $relationships;
    }
}
