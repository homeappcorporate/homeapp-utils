<?php declare(strict_types=1);

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

    public function __construct(RelationshipsBlockSingle $metroStation)
    {
        $this->metroStation = $metroStation;
    }
}
