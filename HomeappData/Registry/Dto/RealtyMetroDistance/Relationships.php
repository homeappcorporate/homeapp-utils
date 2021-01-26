<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\RealtyMetroDistance;

use Homeapp\JsonApi\Relationships\RelationshipsBlockSingle;
use Homeapp\JsonApi\Relationships\RelationshipsInterface;
use JMS\Serializer\Annotation as Serializer;

class Relationships implements RelationshipsInterface
{
    /**
     * @var RelationshipsBlockSingle
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public RelationshipsBlockSingle $metroStation;

    /**
     * @var RelationshipsBlockSingle
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public RelationshipsBlockSingle $realty;

    public function __construct(RelationshipsBlockSingle $metroStation, RelationshipsBlockSingle $realty)
    {
        $this->metroStation = $metroStation;
        $this->realty = $realty;
    }
}
