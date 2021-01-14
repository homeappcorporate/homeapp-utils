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
    public ?string $title = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $description = null;

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
    public ?float $livingArea = null;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public ?float $kitchenArea = null;

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
    public ?int $floorCount = null;

    /**
     * @var float[]
     * @Serializer\Type("array<float>")
     * @Serializer\Groups({"API"})
     */
    public array $rooms = [];

    /**
     * @var ToiletDto[]
     * @Serializer\Type("array<Homeapp\HomeappData\Registry\Dto\Realty\ToiletDto>")
     * @Serializer\Groups({"API"})
     */
    public array $toilets = [];

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $renovationType = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasInternet = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $isGuarded = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $videoUrl = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasOnlineShowing = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasMortgage = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $dealType = null;

    //========================== ТОЛЬКО ДЛЯ КВАРТИР =============================

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $floor = null;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"USER"})
     */
    public ?int $flatNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $flatKind = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $flatType = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasFreeLayout = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasChangedLayout = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasGuardedParking = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasRamp = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasGarbageChute = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasConcierge = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasPrivateYard = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $parkingType = null;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $balconyCount = null;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $loggiaCount = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $windowView = null;

    //========================== только для новостроек =============================

    /**
     * @Serializer\Type("Homeapp\HomeappData\Registry\Dto\Realty\DduOwnerDto")
     * @Serializer\Groups({"API"})
     */
    public ?DduOwnerDto $dduOwner = null;

    //========================== ТОЛЬКО ДЛЯ ДОМОВ =============================

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $houseType = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $communityName = null;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public ?float $ceilingHeight = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $wallsMaterial = null;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public ?int $bedroomCount = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $isResidence = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $electricity = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $gas = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $sewerage = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $plumbing = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $heating = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasPool = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasBathhouse = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasSauna = null;

    /**
     * @Serializer\Type("bool")
     * @Serializer\Groups({"API"})
     */
    public ?bool $hasGarage = null;

    /**
     * @Serializer\Type("float")
     * @Serializer\Groups({"API"})
     */
    public ?float $landArea = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"USER"})
     */
    public ?string $landCadastralNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $shareSize = null;

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
        $attr = new self(
            $realtyType,
            $area,
            $roomCount,
            $price
        );
        $attr->rooms = $rooms;
        $attr->toilets = $toilets;
        return $attr;
    }
}