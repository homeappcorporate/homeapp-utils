<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty;

use Homeapp\HomeappData\Registry\Enum\MetroDistance\MethodEnum as GeneralMethod;

class RealtyMetroDistanceMethodEnum
{
    public static function getNames(): array
    {
        return GeneralMethod::getNames();
    }
}
