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

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $source;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $contractorType = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $contractorPhone = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $contractorName = null;

    public function __construct(string $url, string $source)
    {
        $this->url = $url;
        $this->source = $source;
    }
}
