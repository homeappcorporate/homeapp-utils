<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\PriceHistory;

use Homeapp\JsonApi\Relationships\RelationshipsBlockSingle;
use Homeapp\JsonApi\Relationships\RelationshipsInterface;
use Homeapp\JsonApi\ResourceIdentifierObject;
use JMS\Serializer\Annotation as Serializer;

class Relationships implements RelationshipsInterface
{
    /**
     * @var RelationshipsBlockSingle|null
     * @Serializer\Type("Homeapp\JsonApi\Relationships\RelationshipsBlockSingle")
     * @Serializer\Groups({"API"})
     */
    public ?RelationshipsBlockSingle $realty = null;

    /**
     * @param ResourceIdentifierObject|null $realty
     */
    public function __construct(?ResourceIdentifierObject $realty = null)
    {
        $this->realty = new RelationshipsBlockSingle($realty);
    }
}
