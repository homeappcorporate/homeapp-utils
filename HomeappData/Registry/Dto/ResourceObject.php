<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto;

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
 *    "district": "Homeapp\HomeappData\Registry\Dto\District\Data",
 *    "highway": "Homeapp\HomeappData\Registry\Dto\Highway\Data",
 *    "houseHighwayDistance": "Homeapp\HomeappData\Registry\Dto\HouseHighwayDistance\Data",
 *    "image": "Homeapp\HomeappData\Registry\Dto\Image\Data",
 *    "metroStation": "Homeapp\HomeappData\Registry\Dto\MetroStation\Data",
 *    "realty": "Homeapp\HomeappData\Registry\Dto\Realty\Data",
 *    "realtyImage": "Homeapp\HomeappData\Registry\Dto\RealtyImage\Data",
 *    "realtyMetroDistance": "Homeapp\HomeappData\Registry\Dto\RealtyMetroDistance\Data",
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

    public function addConsistencyData(string $message): void
    {
        if ($this->meta === null) {
            $this->meta = new Meta\ResourceObjectMeta();
        }
        $this->meta->consistency[] = new Meta\MetaConsistencyItem($message);
    }

    public function redefineMeta(Meta\ResourceObjectMeta $clientMeta): void
    {
        if ($this->meta === null) {
            $this->meta = new Meta\ResourceObjectMeta();
        }

        $clientMeta->consistency = $this->meta->consistency;
        $clientMeta->updatedAt = $this->meta->updatedAt;
        $this->meta = $clientMeta;
    }
}
