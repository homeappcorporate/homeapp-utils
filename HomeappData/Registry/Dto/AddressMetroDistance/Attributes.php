<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\AddressMetroDistance;

use Homeapp\JsonApi\Attributes\AttributesInterface;
use Homeapp\HomeappData\Registry\Enum\MetroDistance\MethodEnum;
use JMS\Serializer\Annotation as Serializer;

/**
 * @property-read int $distance
 * @property-read int $time
 * @property-read string $method
 */
class Attributes implements AttributesInterface
{
    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $distance;

    /**
     * @Serializer\Type("int")
     * @Serializer\Groups({"API"})
     */
    public int $time;

    /**
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $method;

    public function __construct(int $distance)
    {
        $this->distance = $distance;
    }

    public static function createForCar(int $distance, int $time): self
    {
        $data = new self($distance);
        $data->time = $time;
        $data->method = MethodEnum::CAR;
        return $data;
    }

    public static function createForFoot(int $distance, int $time): self
    {
        $data = new self($distance);
        $data->time = $time;
        $data->method = MethodEnum::FOOT;
        return $data;
    }
}
