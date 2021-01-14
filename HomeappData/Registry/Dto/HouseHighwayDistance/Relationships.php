<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\HouseHighwayDistance;

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
    public RelationshipsBlockSingle $highway;

    public function __construct(string $id, string $type)
    {
        $this->highway = new RelationshipsBlockSingle(
            new ResourceIdentifierObject($id, $type)
        );
    }
}
