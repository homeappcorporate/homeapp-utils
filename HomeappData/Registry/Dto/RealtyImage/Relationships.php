<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\RealtyImage;

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
    public RelationshipsBlockSingle $image;

    public function __construct(ResourceIdentifierObject $image)
    {
        $this->image = new RelationshipsBlockSingle($image);
    }
}
