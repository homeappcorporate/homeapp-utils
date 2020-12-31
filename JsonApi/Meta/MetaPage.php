<?php declare(strict_types=1);

namespace Homeapp\JsonApi\Meta;

use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read int $offset
 * @property-read int $count
 * @property-read int $total
 */
class MetaPage
{
    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $offset;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $count;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $total;

    public function __construct(int $offset, int $count, int $total)
    {
        $this->offset = $offset;
        $this->count = $count;
        $this->total = $total;
    }

    public function update(int $offset, int $count, int $total): void
    {
        $this->offset = $offset;
        $this->count = $count;
        $this->total = $total;
    }
}
