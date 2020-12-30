<?php declare(strict_types=1);

namespace Homeapp\JsonApi\Relationships;

use Homeapp\JsonApi\ResourceIdentifierObject;
use JMS\Serializer\Annotation as Serializer;

/**
 * Для множественных связанных сущностей (к текущему объекту привязано N связаных)
 */
class RelationshipsBlockMultiple implements RelationshipsBlockInterface
{
    /**
     * @var ResourceIdentifierObject[]
     * @Serializer\Type("array<Homeapp\JsonApi\ResourceIdentifierObject>")
     * @Serializer\Groups({"API"})
     */
    public array $data = [];

    public function __construct(ResourceIdentifierObject ...$data)
    {
        $this->data = $data;
    }
}
