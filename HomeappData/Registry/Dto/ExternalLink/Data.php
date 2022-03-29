<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\ExternalLink;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use Homeapp\HomeappData\Registry\Dto\ExternalLink\Attributes as Attributes;
use JMS\Serializer\Annotation as Serializer;

class Data extends ResourceObject
{
    /**
     * @property-read
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\ExternalLink\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?Attributes $attributes = null;

    public function __construct(?string $id, ?Attributes $attributes)
    {
        parent::__construct($id, EntityNameEnum::EXTERNAL_LINK);
        $this->attributes = $attributes;
    }
}
