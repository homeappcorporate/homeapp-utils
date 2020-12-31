<?php declare(strict_types=1);

namespace Homeapp\JsonApi;

use JMS\Serializer\Annotation as Serializer;

/**
 *  Содержание элемента блока relationships с ссылками
 */
class LinksObject
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $self;

    public function __construct(string $self)
    {
        $this->self = $self;
    }
}
