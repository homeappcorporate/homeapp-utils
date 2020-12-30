<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\House;

class TypeEnum
{
    public const TOWNHOUSE = 'townhouse';
    public const HOUSE = 'house';
    public const COTTAGE = 'cottage';
    public const PART = 'part';
    public const DUPLEX = 'duplex';

    public static function getNames(): array
    {
        return [
            self::TOWNHOUSE => 'Таунхаус',
            self::HOUSE     => 'Дом',
            self::COTTAGE   => 'Коттедж',
            self::PART      => 'Часть дома',
            self::DUPLEX    => 'Дуплекс',
        ];
    }
}
