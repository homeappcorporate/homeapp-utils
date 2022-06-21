<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\PriceHistory;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $oldPrice;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $newPrice;

    /**
     * @Serializer\Type("DateTimeImmutable<'Y-m-d H:i:s'>")
     * @Serializer\Groups({"API"})
     */
    public ?\DateTimeImmutable $dateCreated;

    public function __construct(?string $oldPrice, ?string $newPrice, ?\DateTimeImmutable $dateCreated)
    {
        $this->oldPrice = $oldPrice;
        $this->newPrice = $newPrice;
        $this->dateCreated = $dateCreated;
    }
}
