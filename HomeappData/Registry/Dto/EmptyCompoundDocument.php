<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto;

use Homeapp\JsonApi\JsonApiDocumentBodyInterface;
use Homeapp\JsonApi\SentFieldsCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * CompoundDocument в терминах JsonApi
 */
class EmptyCompoundDocument implements JsonApiDocumentBodyInterface
{
    /**
     * @property-read
     * @Serializer\Type("integer")
     * @Serializer\Groups({"API"})
     */
    public ?int $data; //всегда null

    public function __construct()
    {
        $this->data = null;
    }

    public function addConsistencyData(string $message): void
    {
        // TODO: Implement addConsistencyData() method.
    }

    public function withSentFieldsCollection(SentFieldsCollection $fields): void
    {
        // TODO: Implement withSentFieldsCollection() method.
    }
}
