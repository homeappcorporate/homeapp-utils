<?php declare(strict_types=1);

namespace Homeapp\JsonApi\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read string $message
 */
class MetaConsistencyItem
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }
}
