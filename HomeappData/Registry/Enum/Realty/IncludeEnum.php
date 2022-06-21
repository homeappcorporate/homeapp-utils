<?php

declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty;

/**
 * Допустимые значения для параметра include для сущности Realty
 */
class IncludeEnum
{
    public const ADDRESS = 'address';
    public const ADDRESS_BTI = 'address.bti';
    public const COMPLEX = 'complex';
    public const COMPLEX_HOUSING = 'complexHousing';
    public const REALTY_METRO = 'metroDistance.metroStation';
    public const ADDRESS_METRO = 'address.metroDistance.metroStation';
    public const HIGHWAYS = 'highwayDistance.highway';
    public const IMAGES = 'realtyImage.image';
    public const EXTERNAL_LINK = 'externalLink';
    public const HISTORY_PRICE = 'historyPrice';

    public static function getNames(): array
    {
        return [
            self::ADDRESS => 'address',
            self::ADDRESS_BTI => 'address.bti',
            self::COMPLEX => 'complex',
            self::COMPLEX_HOUSING => 'complexHousing',
            self::REALTY_METRO => 'metroDistance.metroStation',
            self::ADDRESS_METRO => 'address.metroDistance.metroStation',
            self::HIGHWAYS => 'highwayDistance.highway',
            self::IMAGES => 'realtyImage.image',
            self::EXTERNAL_LINK => 'externalLink',
            self::HISTORY_PRICE => 'historyPrice',
        ];
    }
}
