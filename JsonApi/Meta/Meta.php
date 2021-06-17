<?php

declare(strict_types=1);

namespace Homeapp\JsonApi\Meta;

use DateTimeImmutable;
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
}
