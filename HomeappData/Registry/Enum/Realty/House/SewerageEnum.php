<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\House;

class SewerageEnum
{
    public const NONE = 'none';
    public const CESSPOOL = 'cesspool';
    public const SEPTIC = 'septic';
    public const BIO = 'bio';
    public const CENTRAL = 'central';

    public static function getNames(): array
    {
        return [
            self::NONE     => 'Нет',
            self::CESSPOOL => 'Выгребная яма',
            self::SEPTIC   => 'Септик',
            self::BIO      => 'Устройства биологической очистки',
            self::CENTRAL  => 'Центральная',
        ];
    }
}
