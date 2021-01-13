<?php

declare(strict_types=1);

namespace Homeapp\JsonApi;

use Homeapp\JsonApi\Meta\Meta;
use Homeapp\JsonApi\Meta\MetaPage;
use JMS\Serializer\Annotation as Serializer;

/**
 * CompoundDocument в терминах JsonApi. Для списков.
 *
 * @property-read ResourceInterface[] $data
 * @property-read ResourceInterface[] $included
 *
 * @property-read null|Meta $meta
 */
class ListCompoundDocument implements JsonApiDocumentBodyInterface
{
    /**
     * @Serializer\Type("array<Homeapp\HomeappData\Registry\Dto\ResourceObject>")
     * @Serializer\Groups({"API"})
     */
    public array $data;

    /**
     * @Serializer\Type("array<Homeapp\HomeappData\Registry\Dto\ResourceObject>")
     * @Serializer\Groups({"API"})
     */
    public array $included = [];

    /**
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
}
