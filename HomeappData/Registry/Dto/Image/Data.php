<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Image;

use Homeapp\HomeappData\Registry\Dto\ResourceObject;
use Homeapp\JsonApi\Attributes\AttributesInterface;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use Homeapp\JsonApi\Meta\Meta;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read null|Attributes $attributes;
 */
class Data extends ResourceObject
{
    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\Image\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?AttributesInterface $attributes = null;

    public function __construct(?string $id, ?AttributesInterface $attributes, Meta $meta = null)
    {
        parent::__construct($id, EntityNameEnum::IMAGE, $meta);
        $this->attributes = $attributes;
    }
}
