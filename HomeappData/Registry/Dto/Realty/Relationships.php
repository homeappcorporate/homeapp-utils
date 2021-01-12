<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Realty;

use Homeapp\JsonApi\Relationships\RelationshipsBlockMultiple;
use Homeapp\JsonApi\Relationships\RelationshipsBlockSingle;
use Homeapp\JsonApi\Relationships\RelationshipsInterface;
use Homeapp\JsonApi\DataParsingException;
use JMS\Serializer\Annotation as Serializer;

class Relationships implements RelationshipsInterface
{
    /**
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public RelationshipsBlockSingle $address;

    /**
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsBlockSingle $complex = null;

    /**
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockMultiple")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsBlockMultiple $metroDistance = null;

    /**
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockMultiple")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsBlockMultiple $highwayDistance = null;

    /**
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockMultiple")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsBlockMultiple $realtyImage = null;

    public function __construct(RelationshipsBlockSingle $address)
    {
        $this->address = $address;
    }

    public function addComplexRelationBlockSingle(RelationshipsBlockSingle $blockSingle): self
    {
        $this->complex = $blockSingle;
        return $this;
    }

    public function addMetroDistanceRelationBlockMultiple(RelationshipsBlockMultiple $blockMultiple): self
    {
        $this->metroDistance = $blockMultiple;
        return $this;
    }

    public function addHighwayDistanceRelationBlockMultiple(RelationshipsBlockMultiple $blockMultiple): self
    {
        $this->highwayDistance = $blockMultiple;
        return $this;
    }

    public function addRealtyImageMetroDistanceRelationBlockMultiple(RelationshipsBlockMultiple $blockMultiple): self
    {
        $this->realtyImage = $blockMultiple;
        return $this;
    }
}
