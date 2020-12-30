<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\Flat;


class InvestorTypeEnum
{
    public const PHYSICAL = 'physical';
    public const LEGAL    = 'legal';

    public static function getNames(): array
    {
        return [
            self::PHYSICAL => 'Физическое лицо',
            self::LEGAL    => 'Юридическое лицо',
        ];
    }
}
