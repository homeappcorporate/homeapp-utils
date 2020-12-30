<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\House;

class HeatingEnum
{
    public const NONE = 'none';
    public const CENTRAL = 'central';
    public const LOCAL = 'local';
    public const GAS = 'cas';
    public const ELECTRICITY = 'electricity';
    public const LIQUID = 'liquid';
    public const FURNACE = 'furnace';

    public static function getNames(): array
    {
        return [
            self::NONE        => 'Нет',
            self::CENTRAL     => 'Центральное',
            self::LOCAL       => 'Отдельное',
            self::GAS         => 'Газовое',
            self::ELECTRICITY => 'Электрическое',
            self::LIQUID      => 'Жидкое топливо',
            self::FURNACE     => 'Печь',
        ];
    }
}
