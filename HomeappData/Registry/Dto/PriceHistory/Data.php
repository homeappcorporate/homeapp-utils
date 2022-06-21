<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\PriceHistory;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use JMS\Serializer\Annotation as Serializer;

class Data extends ResourceObject
{
    /**
     * @property-read
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\PriceHistory\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?Attributes $attributes = null;

    /**
     * @property-read
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\PriceHistory\Relationships")
     * @Serializer\Groups({"API"})
     */
    public ?Relationships $relationships = null;

    public function __construct(?string $id, ?Attributes $attributes, ?Relationships $relationships)
    {
        parent::__construct($id, EntityNameEnum::REALTY);
        $this->attributes = $attributes;
        $this->relationships = $relationships;
    }
}
