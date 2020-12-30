<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\RealtyImage;

class GroupEnum
{
    public const PHOTO = 'photo';
    public const PLAN = 'plan';

    public static function getNames(): array
    {
        return [
            self::PHOTO => 'Фото',
            self::PLAN  => 'План',
        ];
    }
}
