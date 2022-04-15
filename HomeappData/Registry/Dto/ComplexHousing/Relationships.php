<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\ComplexHousing;

use Homeapp\JsonApi\Relationships\RelationshipsBlockSingle;
use Homeapp\JsonApi\Relationships\RelationshipsInterface;
use JMS\Serializer\Annotation as Serializer;

class Relationships implements RelationshipsInterface
{
    /**
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsBlockSingle $complex = null;

    public function __construct(RelationshipsBlockSingle $complex)
    {
        $this->complex = $complex;
    }
}
