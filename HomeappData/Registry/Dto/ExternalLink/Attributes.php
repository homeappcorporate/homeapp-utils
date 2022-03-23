<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\ExternalLink;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
