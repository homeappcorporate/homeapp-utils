<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\Flat;

class KindEnum
{
    public const TYPICAL = 'typical';
    public const PENTHOUSE = 'penthouse';
    public const TWO_TIER = 'two_tier';

    public static function getNames(): array
    {
        return [
            self::TYPICAL   => 'Типовое',
            self::PENTHOUSE => 'Пентхаус',
            self::TWO_TIER  => 'Двухуровневое',
        ];
    }
}
