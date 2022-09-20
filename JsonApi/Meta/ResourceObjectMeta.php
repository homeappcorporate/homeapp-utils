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
     * @var MetaConsistencyItem[]
     * @Serializer\Type("array<Homeapp\JsonApi\Meta\MetaConsistencyItem>")
     * @Serializer\Groups({"API"})
     */
    public ?array $presentation = null;

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
    public ?DateTimeImmutable $createdAt = null;

    /**
     * @Serializer\Groups({"API"})
     * @Serializer\Type("DateTimeImmutable<'Y-m-d H:i:s'>")
     */
    public ?DateTimeImmutable $updatedAt = null;

    /**
     * @Serializer\Groups({"API"})
     * @Serializer\Type("integer")
     */
    public ?int $serviceRequestExtId = null;

    /**
     * @Serializer\Groups({"API"})
     * @Serializer\Type("bool")
     */
    public ?bool $isPresentationReady = null;

    /**
     * Когда последний раз обновлялась информация, на основе которой был составлен запрос на PATCH
     * @Serializer\Groups({"API"})
     * @Serializer\Type("DateTimeImmutable<'Y-m-d H:i:s'>")
     */
    public ?DateTimeImmutable $refreshedAt = null;
}
