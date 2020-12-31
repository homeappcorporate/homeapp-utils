<?php declare(strict_types=1);

namespace Homeapp\JsonApi\Relationships;

use Homeapp\JsonApi\ResourceIdentifierObject;
use JMS\Serializer\Annotation as Serializer;

/**
 * Для НЕ множественных связанных сущностей (к текущему объекту привязан 1 связаный)
 */
class RelationshipsBlockSingle implements RelationshipsBlockInterface
{
    /**
     * @var ResourceIdentifierObject|null
     * @Serializer\Type("Homeapp\JsonApi\ResourceIdentifierObject")
     * @Serializer\Groups({"API"})
     */
    public ?ResourceIdentifierObject $data = null;

    public function __construct(?ResourceIdentifierObject $resourceIdentifierObject = null)
    {
        $this->data = $resourceIdentifierObject;
    }
}
