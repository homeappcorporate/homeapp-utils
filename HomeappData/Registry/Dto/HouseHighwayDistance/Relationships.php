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

    /**
     * @var RelationshipsBlockSingle
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public RelationshipsBlockSingle $realty;

    public function __construct(RelationshipsBlockSingle $highway, RelationshipsBlockSingle $realty)
    {
        $this->highway = $highway;
        $this->realty = $realty;
    }
}
