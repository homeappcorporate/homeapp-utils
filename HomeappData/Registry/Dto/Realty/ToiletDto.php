<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Realty;

use JMS\Serializer\Annotation as Serializer;

class ToiletDto
{
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $kind = null;

    /**
     * @var bool
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $isInside = null;

    public function __construct(?string $kind = null, ?bool $isInside = null)
    {
        $this->kind = $kind;
        $this->isInside = $isInside;
    }
}
