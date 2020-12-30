<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\Flat;

class TypeEnum
{
    public const FLAT = 'flat';
    public const APARTMENT = 'apartment';

    public static function getNames(): array
    {
        return [
            self::FLAT      => 'Квартира',
            self::APARTMENT => 'Апартаменты',
        ];
    }
}
