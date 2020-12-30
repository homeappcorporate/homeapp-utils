<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty;

class RealtyTypeEnum
{
    public const FLAT_SECONDARY = 'flat_secondary';
    public const FLAT_NEW       = 'flat_new';
    public const HOUSE          = 'house';

    public static function getNames(): array
    {
        return [
            self::FLAT_SECONDARY => 'Вторичка',
            self::FLAT_NEW       => 'Новостройка',
            self::HOUSE          => 'Дом',
        ];
    }
}
