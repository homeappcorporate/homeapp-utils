<?php

declare(strict_types=1);

namespace Homeapp\JsonApi\Meta;

use DateTimeImmutable;

class ResourceObjectMeta
{
    /**
     * @var MetaConsistencyItem[]
     * @Serializer\Type("array<Homeapp\JsonApi\Meta\MetaConsistencyItem>")
     * @Serializer\Groups({"API"})
     */
    public ?array $consistency = null;

    /**
     * @Serializer\Groups({"API"})
     * @Serializer\Type("DateTimeImmutable<'Y-m-d H:i:s'>")
     */
    public ?DateTimeImmutable $updatedAt = null;
}
