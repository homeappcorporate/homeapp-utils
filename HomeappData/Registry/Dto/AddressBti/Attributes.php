<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\AddressBti;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;

class Attributes implements AttributesInterface
{
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $wallsMaterial = null;

    /**
     * @var float|null
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public ?float $ceilingHeight = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $heatingType = null;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $passengerLifts = null;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $cargoLifts = null;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $deliveryYear = null;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $deliveryQuarter = null;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $isDelivered = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $series = null;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $buildYear = null;
}
