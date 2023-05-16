<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto;

use Homeapp\JsonApi\Error\Error;
use Homeapp\JsonApi\Meta;
use Homeapp\JsonApi\ResourceInterface;
use Homeapp\JsonApi\ResourceObjectInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read null|string $id
 * @property-read string $type
 *
 * @Serializer\Discriminator(map = {
 *    "address": "Homeapp\HomeappData\Registry\Dto\Address\Data",
 *    "addressBti": "Homeapp\HomeappData\Registry\Dto\AddressBti\Data",
 *    "addressMetroDistance": "Homeapp\HomeappData\Registry\Dto\AddressMetroDistance\Data",
 *    "cityArea": "Homeapp\HomeappData\Registry\Dto\CityArea\Data",
 *    "complex": "Homeapp\HomeappData\Registry\Dto\Complex\Data",
 *    "complexHousing": "Homeapp\HomeappData\Registry\Dto\ComplexHousing\Data",
 *    "cottageComplex": "Homeapp\HomeappData\Registry\Dto\CottageComplex\Data",
 *    "district": "Homeapp\HomeappData\Registry\Dto\District\Data",
 *    "highway": "Homeapp\HomeappData\Registry\Dto\Highway\Data",
 *    "houseHighwayDistance": "Homeapp\HomeappData\Registry\Dto\HouseHighwayDistance\Data",
 *    "image": "Homeapp\HomeappData\Registry\Dto\Image\Data",
 *    "metroStation": "Homeapp\HomeappData\Registry\Dto\MetroStation\Data",
 *    "realty": "Homeapp\HomeappData\Registry\Dto\Realty\Data",
 *    "realtyImage": "Homeapp\HomeappData\Registry\Dto\RealtyImage\Data",
 *    "realtyMetroDistance": "Homeapp\HomeappData\Registry\Dto\RealtyMetroDistance\Data",
 *    "externalLink": "Homeapp\HomeappData\Registry\Dto\ExternalLink\Data",
 *    "priceHistory": "Homeapp\HomeappData\Registry\Dto\PriceHistory\Data",
 * }, groups={"API"})
 */
abstract class ResourceObject implements ResourceInterface, ResourceObjectInterface
{
    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $id = null;

    /**
     * @Serializer\Type("Homeapp\JsonApi\Meta\ResourceObjectMeta")
     * @Serializer\Groups({"API"})
     */
    public ?Meta\ResourceObjectMeta $meta = null;

    public function __construct(?string $id, string $type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    /**
     * @param string $description
     * @param string $pointer
     */
    public function addError(string $description, string $pointer): void
    {
        if ($this->meta === null) {
            $this->meta = new Meta\ResourceObjectMeta();
        }

        $error = new Error($description);
        if ($pointer !== null) {
            $error->withPointer($pointer);
        }
        $this->meta->errors[] = $error;
    }

    /**
     * @param string $message
     * @param string[] $fields
     */
    public function addConsistencyData(string $message, array $fields = []): void
    {
        if ($this->meta === null) {
            $this->meta = new Meta\ResourceObjectMeta();
        }
        $this->meta->consistency[] = new Meta\MetaConsistencyItem($message, $fields);
    }

    /**
     * @param string $message
     * @param string[] $fields
     */
    public function addPresentationData(string $message, array $fields = []): void
    {
        if ($this->meta === null) {
            $this->meta = new Meta\ResourceObjectMeta();
        }
        $this->meta->presentation[] = new Meta\MetaConsistencyItem($message, $fields);
    }

    public function redefineMeta(Meta\ResourceObjectMeta $clientMeta): void
    {
        if ($this->meta === null) {
            $this->meta = new Meta\ResourceObjectMeta();
        }

        $clientMeta->consistency = $this->meta->consistency;
        $clientMeta->presentation = $this->meta->presentation;
        $clientMeta->createdAt = $this->meta->createdAt;
        $clientMeta->updatedAt = $this->meta->updatedAt;
        $clientMeta->errors = $this->meta->errors;
        $clientMeta->isPresentationReady = $this->meta->isPresentationReady;
        $this->meta = $clientMeta;
    }
}
