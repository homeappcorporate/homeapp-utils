<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\Flat;

class WindowViewEnum
{
    public const STREET = "street";
    public const YARD = "yard";
    public const BOTH = "both";

    public static function getNames(): array
    {
        return [
            self::STREET => 'На улицу',
            self::YARD   => 'Во двор',
            self::BOTH   => 'В обе стороны',
        ];
    }
}
