<?php declare(strict_types=1);

namespace Homeapp\JsonApi;

use Homeapp\JsonApi\Meta;
use JMS\Serializer\Annotation as Serializer;

/**
 * CompoundDocument в терминах JsonApi
 *
 * @property-read ResourceInterface $data
 * @property-read ResourceInterface[] $included
 *
 * @property-read null|Meta\Meta $meta
 * @property-read null|SentFieldsCollection $sentFieldsCollection
 */
class CompoundDocument implements JsonApiResponseInterface
{
    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\ResourceObject")
     * @Serializer\Groups({"API"})
     */
    public ResourceInterface $data;

    /**
     * @Serializer\Type("array<Homeapp\HomeappData\Registry\Dto\ResourceObject>")
     * @Serializer\Groups({"API"})
     */
    public array $included = [];

    /**
     * @Serializer\Type("Homeapp\JsonApi\Meta\Meta")
     * @Serializer\Groups({"API"})
     */
    public ?Meta\Meta $meta = null;

    public function __construct(ResourceInterface $data, ResourceInterface ...$included)
    {
        $this->data = $data;
        $this->included = $included;
    }

    public function addConsistencyData(string $message): void
    {
        if ($this->meta === null) {
            $this->meta = new Meta\Meta();
        }
        $this->meta->consistency[] = new Meta\MetaConsistencyItem($message);
    }

    public function withSentFieldsCollection(SentFieldsCollection $fields): void
    {
        $this->sentFieldsCollection = $fields;
    }
}