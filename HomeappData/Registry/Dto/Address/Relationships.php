<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Address;

use Homeapp\JsonApi\Relationships\RelationshipsBlockLinks;
use Homeapp\JsonApi\Relationships\RelationshipsBlockMultiple;
use Homeapp\JsonApi\Relationships\RelationshipsBlockSingle;
use Homeapp\JsonApi\Relationships\RelationshipsInterface;
use JMS\Serializer\Annotation as Serializer;

class Relationships implements RelationshipsInterface
{
    /**
     * @var \Homeapp\JsonApi\Relationships\RelationshipsBlockSingle
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public RelationshipsBlockSingle $addressBti;

    /**
     * @var ?RelationshipsBlockMultiple
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockMultiple")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsBlockMultiple $metroDistance;

    /**
     * @var RelationshipsBlockLinks
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockLinks")
     * @Serializer\Groups({"API"})
     */
    public RelationshipsBlockLinks $district;

    /**
     * @var \Homeapp\JsonApi\Relationships\RelationshipsBlockLinks
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockLinks")
     * @Serializer\Groups({"API"})
     */
    public RelationshipsBlockLinks $cityArea;

    public function __construct(
        RelationshipsBlockSingle $addressBti,
        RelationshipsBlockMultiple $metroDistance,
        RelationshipsBlockLinks $district,
        RelationshipsBlockLinks $cityArea
    ) {
        $this->addressBti = $addressBti;
        $this->metroDistance = $metroDistance;
        $this->district = $district;
        $this->cityArea = $cityArea;
    }
}
