<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Highway;

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
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\Highway\Attributes")
     * @Serializer\Groups({"API"})
     */
    public ?AttributesInterface $attributes = null;

    public function __construct(?string $id, ?AttributesInterface $attributes)
    {
        parent::__construct($id, EntityNameEnum::HIGHWAY);
        $this->attributes = $attributes;
    }
}
