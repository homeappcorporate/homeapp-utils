<?php declare(strict_types=1);

namespace Homeapp\JsonApi\Relationships;

use Homeapp\JsonApi\LinksObject;
use JMS\Serializer\Annotation as Serializer;

/**
 *  Элемент блока relationships, содержащий ссылки
 */
class RelationshipsBlockLinks implements RelationshipsBlockInterface
{
    /**
     * @var null|LinksObject
     * @Serializer\Type("Homeapp\JsonApi\LinksObject")
     * @Serializer\Groups({"API"})
     */
    public ?LinksObject $links;

    public function __construct(?LinksObject $linksObject = null)
    {
        $this->links = $linksObject;
    }
}
