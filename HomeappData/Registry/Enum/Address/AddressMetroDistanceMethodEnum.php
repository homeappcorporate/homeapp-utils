<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Address;

use Homeapp\HomeappData\Registry\Enum\MetroDistance\MethodEnum as GeneralMethod;

class AddressMetroDistanceMethodEnum
{
    public static function getNames(): array
    {
        return GeneralMethod::getNames();
    }
}
