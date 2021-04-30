<?php

declare(strict_types=1);

namespace Homeapp\JsonApi\Meta;

use DateTimeImmutable;
use Homeapp\JsonApi\Error\Error;
use JMS\Serializer\Annotation as Serializer;

class ResourceObjectMeta
{
    /**
     * @var MetaConsistencyItem[]
     * @Serializer\Type("array<Homeapp\JsonApi\Meta\MetaConsistencyItem>")
     * @Serializer\Groups({"API"})
     */
    public ?array $consistency = null;

    /**
     * @var null|Error[]
     * @Serializer\Type("array<Homeapp\JsonApi\Error\Error>")
     * @Serializer\Groups({"API"})
     */
    public ?array $errors = null;

    /**
     * @Serializer\Groups({"API"})
     * @Serializer\Type("DateTimeImmutable<'Y-m-d H:i:s'>")
     */
    public ?DateTimeImmutable $updatedAt = null;
}
