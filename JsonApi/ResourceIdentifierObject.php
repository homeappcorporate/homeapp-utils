<?php declare(strict_types=1);

namespace Homeapp\JsonApi;

use JMS\Serializer\Annotation as Serializer;

/**
 * Resource Identifier Object в терминах JsonApi
 *
 * @property-read string $id
 * @property-read string $type
 */
class ResourceIdentifierObject implements ResourceInterface
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $type;

    /**
     * @param string $id
     * @param string $type
     */
    public function __construct(string $id, string $type)
    {
        $this->id = $id;
        $this->type = $type;
    }
}
