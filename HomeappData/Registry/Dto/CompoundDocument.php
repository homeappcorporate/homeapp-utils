<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto;

use Homeapp\JsonApi\JsonApiDocumentBodyInterface;
use Homeapp\JsonApi\Meta;
use Homeapp\JsonApi\ResourceInterface;
use Homeapp\JsonApi\SentFieldsCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * CompoundDocument в терминах JsonApi

 * @property-read null|SentFieldsCollection $sentFieldsCollection
 */
class CompoundDocument implements JsonApiDocumentBodyInterface
{
    /**
     * @property-read
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\ResourceObject")
     * @Serializer\Groups({"API"})
     */
    public ResourceObject $data;

    /**
     * @property-read
     * @Serializer\Type("array<Homeapp\HomeappData\Registry\Dto\ResourceObject>")
     * @Serializer\Groups({"API"})
     */
    public array $included = [];

    /**
     * @property-read
     * @Serializer\Type("Homeapp\JsonApi\Meta\Meta")
     * @Serializer\Groups({"API"})
     */
    public ?Meta\Meta $meta = null;

    public function __construct(ResourceInterface $data, ResourceInterface ...$included)
    {
        $this->data = $data;
        $this->included = $included;
    }

    public function withSentFieldsCollection(SentFieldsCollection $fields): void
    {
        $this->sentFieldsCollection = $fields;
    }
}
