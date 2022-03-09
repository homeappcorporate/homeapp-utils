<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Complex;

use Homeapp\JsonApi\Relationships\RelationshipsBlockMultiple;
use Homeapp\JsonApi\Relationships\RelationshipsInterface;
use JMS\Serializer\Annotation as Serializer;

class Relationships implements RelationshipsInterface
{
    /**
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockMultiple")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsBlockMultiple $complexHousing = null;

    public function __construct(RelationshipsBlockMultiple $complexHousing)
    {
        $this->complexHousing = $complexHousing;
    }
}
