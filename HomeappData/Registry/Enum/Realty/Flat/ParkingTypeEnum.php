<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\Flat;

class ParkingTypeEnum
{
    public const OPEN = 'open';
    public const UNDERGROUND = 'underground';
    public const GROUND = 'ground';
    public const MULTILEVEL = 'multilevel';
    public const ROOF = 'roof';

    public static function getNames(): array
    {
        return [
            self::OPEN        => 'Открытая',
            self::UNDERGROUND => 'Подземная',
            self::GROUND      => 'Наземная',
            self::MULTILEVEL  => 'Многоуровневая',
            self::ROOF        => 'На крыше',
        ];
    }
}
