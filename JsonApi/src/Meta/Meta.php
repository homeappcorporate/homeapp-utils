<?php declare(strict_types=1);

namespace Homeapp\JsonApi\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * Весь блок 'meta' целиком
 */
class Meta
{
    /**
     * @var MetaPage|null
     * @Serializer\Type("Homeapp\JsonApi\Meta\MetaPage")
     * @Serializer\Groups({"API"})
     */
    public ?MetaPage $page = null;

    /**
     * @var MetaConsistencyItem[]
     * @Serializer\Type("array<Homeapp\JsonApi\Meta\MetaConsistencyItem>")
     * @Serializer\Groups({"API"})
     */
    public array $consistency = [];
}
