<?php

declare(strict_types=1);

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

    /**
     * НЕ обязательное, для обратной совместмости пакета. Нужно будет потом сделать обязательным.
     * @var RelationshipsBlockSingle|null
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsBlockSingle $realty = null;

    public function __construct(ResourceIdentifierObject $image, ?ResourceIdentifierObject $realty = null)
    {
        $this->image = new RelationshipsBlockSingle($image);
        $this->realty = new RelationshipsBlockSingle($realty);
    }
}
