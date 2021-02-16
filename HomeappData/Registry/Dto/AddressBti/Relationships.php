<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\AddressBti;

use Homeapp\JsonApi\Relationships\RelationshipsBlockSingle;
use Homeapp\JsonApi\Relationships\RelationshipsInterface;
use Homeapp\JsonApi\ResourceIdentifierObject;
use JMS\Serializer\Annotation as Serializer;

class Relationships implements RelationshipsInterface
{
    /**
     * @var RelationshipsBlockSingle
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public RelationshipsBlockSingle $address;

    public function __construct(ResourceIdentifierObject $address)
    {
        $this->address = new RelationshipsBlockSingle($address);
    }
}
