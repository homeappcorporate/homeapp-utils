<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Realty;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @property-read string $realtyType
 * @property-read float $area
 * @property-read int $roomCount
 * @property-read int $price
 * @property-read array $rooms
 * @property-read array $toilets
 */
class Attributes implements AttributesInterface
{
    //========================== ДЛЯ ВСЕХ ТИПОВ ОБЪЕКТОВ =============================

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $realtyType;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $title;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $description;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public float $area;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $roomCount;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public ?float $livingArea;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public ?float $kitchenArea;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API", "FULL_INFO", "SUGGEST"})
     *
     * @Assert\NotBlank(groups={"create","update"})
     */
    public int $price;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API", "FULL_INFO", "SUGGEST"})
     */
    public ?int $additionalPrice;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API", "FULL_INFO", "SUGGEST"})
     */
    public ?string $additionalPriceCurrency;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API", "FULL_INFO", "SUGGEST"})
     */
    public ?int $floorCount;

    /**
     * @var float[]
     * @Serializer\Type("array<float>")
     * @Serializer\Groups({"API"})
     */
    public array $rooms;

    /**
     * @var ToiletDto[]
     * @Serializer\Type("array<Homeapp\HomeappData\Registry\Dto\Realty\ToiletDto>")
     * @Serializer\Groups({"API"})
     */
    public array $toilets;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $renovationType;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasInternet;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $isGuarded;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $videoUrl;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasOnlineShowing;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasMortgage;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public bool $isSberDiscountRequested = true;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasInstalment;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $dealType;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"USER"})
     */
    public ?string $cadastralNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $infrastructure;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $documents;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public bool $isHomeapp;

    //========================== ТОЛЬКО ДЛЯ КВАРТИР =============================

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $floor;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"USER"})
     */
    public ?int $flatNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $flatKind;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $flatType;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasFreeLayout;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasChangedLayout;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasGuardedParking;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasRamp;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasGarbageChute;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasConcierge;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasPrivateYard;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $parkingType;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $balconyCount;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $loggiaCount;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $windowView;

    //========================== только для новостроек =============================

    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\Realty\DduOwnerDto")
     * @Serializer\Groups({"USER"})
     */
    public ?DduOwnerDto $dduOwner;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $deliveryYear = null;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $deliveryQuarter = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $isDelivered = null;

    //========================== ТОЛЬКО ДЛЯ ДОМОВ =============================

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $houseType;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $communityName;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public ?float $ceilingHeight;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $wallsMaterial;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $bedroomCount;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $isResidence;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $electricity;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $gas;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $sewerage;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $plumbing;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $heating;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasPool;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasBathhouse;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasSauna;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasGarage;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public ?float $landArea;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"USER"})
     */
    public ?string $landCadastralNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $shareSize;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $landUsageType;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $landPurpose;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $landShape;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $relief;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $furniture;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public ?float $cityDistance;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\Groups({"API"})
     */
    public ?bool $burden;

    public function __construct(
        string $realtyType,
        float $area,
        int $roomCount,
        int $price,
        array $rooms = [],
        array $toilets = []
    ) {
        $this->realtyType = $realtyType;
        $this->area = $area;
        $this->roomCount = $roomCount;
        $this->price = $price;
        $this->rooms = $rooms;
        $this->toilets = $toilets;
    }

    public static function createWithAllProps(
        string $realtyType,
        float $area,
        int $roomCount,
        int $price,
        array $rooms = [],
        array $toilets = []
    ): self {
        return new self(
            $realtyType,
            $area,
            $roomCount,
            $price,
            $rooms,
            $toilets
        );
    }
}