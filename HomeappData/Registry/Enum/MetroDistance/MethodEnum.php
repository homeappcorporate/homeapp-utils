<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\MetroDistance;

class MethodEnum
{
    public const CAR = 'car';
    public const FOOT = 'foot';

    public static function getNames(): array
    {
        return [
            self::CAR  => 'На машине',
            self::FOOT => 'Пешком',
        ];
    }
}
