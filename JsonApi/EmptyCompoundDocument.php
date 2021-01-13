<?php

declare(strict_types=1);

namespace Homeapp\JsonApi;

use JMS\Serializer\Annotation as Serializer;

/**
 * CompoundDocument в терминах JsonApi
 *
 * @property-read null $data
 */
class EmptyCompoundDocument implements JsonApiDocumentBodyInterface
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

    public function addConsistencyData(string $message): void
    {
        // TODO: Implement addConsistencyData() method.
    }

    public function withSentFieldsCollection(SentFieldsCollection $fields): void
    {
        // TODO: Implement withSentFieldsCollection() method.
    }
}
