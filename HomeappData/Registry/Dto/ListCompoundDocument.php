<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto;

use Homeapp\JsonApi\JsonApiDocumentBodyInterface;
use Homeapp\JsonApi\Meta\Meta;
use Homeapp\JsonApi\Meta\MetaPage;
use Homeapp\JsonApi\ResourceInterface;
use Homeapp\JsonApi\SentFieldsCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * CompoundDocument в терминах JsonApi. Для списков.
 */
class ListCompoundDocument implements JsonApiDocumentBodyInterface
{
    /**
     * @property-read
     * @Serializer\Type("array<Homeapp\HomeappData\Registry\Dto\ResourceObject>")
     * @Serializer\Groups({"API"})
     */
    public array $data;

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
    public ?Meta $meta = null;

    /**
     * @param ResourceInterface[] $data
     * @param ResourceInterface ...$included
     */
    public function __construct(array $data, ResourceInterface ...$included)
    {
        $this->data = $data;
        $this->included = $included;
    }

    public function setPageParams(int $offset, int $count, int $total): void
    {
        if ($this->meta === null) {
            $this->meta = new Meta();
        }
        if ($this->meta->page === null) {
            $this->meta->page = new MetaPage($offset, $count, $total);
        }
        $this->meta->page->update($offset, $count, $total);
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
