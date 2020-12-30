<?php declare(strict_types=1);

namespace Homeapp\JsonApi;

use JMS\Serializer\Annotation as Serializer;

/**
 * CompoundDocument в терминах JsonApi
 *
 * @property-read null $data
 */
class EmptyCompoundDocument implements JsonApiResponseInterface
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\Groups({"API"})
     */
    public ?int $data; //всегда null

    public function __construct()
    {
        $this->data = null;
    }
}
