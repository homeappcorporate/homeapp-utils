<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty;

class RenovationTypeEnum
{
    public const NONE = 'none';
    public const AUTHOR = 'author';
    public const COSMETIC = 'cosmetic';
    public const EURO = 'euro';

    public const FINE_FINISHING = 'fine_finishing';
    public const ROUGH_FINISHING = 'rough_finishing';

    public static function getNames(): array
    {
        return array_merge(self::getRenovationNames(), self::getFinishingNames());
    }

    public static function getRenovationNames(): array
    {
        return [
            self::NONE     => 'Без ремонта',
            self::AUTHOR   => 'Авторский',
            self::COSMETIC => 'Косметический',
            self::EURO     => 'Евро',
        ];
    }

    public static function getFinishingNames(): array
    {
        return [
            self::NONE            => 'Без отделки',
            self::FINE_FINISHING  => 'Чистовая отделка',
            self::ROUGH_FINISHING => 'Черновая отделка',
        ];
    }
}
