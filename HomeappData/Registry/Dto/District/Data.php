<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\District;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use Homeapp\HomeappData\Registry\Dto\District\Attributes as Attributes;
use JMS\Serializer\Annotation as Serializer;

class Data extends ResourceObject
{
    /**
     * @property-read
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\District\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?Attributes $attributes = null;

    public function __construct(?string $id, ?Attributes $attributes)
    {
        parent::__construct($id, EntityNameEnum::DISTRICT);
        $this->attributes = $attributes;
    }
}
