<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\House;

class PlumbingEnum
{
    public const NONE = 'none';
    public const CENTRAL = 'central';
    public const HOLE = 'hole';
    public const WELL = 'well';
    public const BORDER = 'border';

    public static function getNames(): array
    {
        return [
            self::NONE    => 'Нет',
            self::CENTRAL => 'Центральное',
            self::HOLE    => 'Скважина',
            self::WELL    => 'Колодец/колонка',
            self::BORDER  => 'По границе',
        ];
    }
}
