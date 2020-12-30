<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\House;

class LandUsageTypeEnum
{
    public const FARM = 'farm';
    public const GARDEN = 'garden';
    public const IGS = 'IGS';
    public const INDUSTRIAL = 'industrial';
    public const INVEST_PROJECT = 'investproject';
    public const LPH = 'LPH';
    public const DNP = 'DNP';
    public const SNT = 'SNT';

    public static function getNames(): array
    {
        return [
            self::FARM           => 'Фермерское хозяйство',
            self::GARDEN         => 'Садоводство',
            self::IGS            => 'ИЖС',
            self::INDUSTRIAL     => 'Земля промышленного назначения',
            self::INVEST_PROJECT => 'Инвестпроект',
            self::LPH            => 'ЛПХ (личное подсобное хозяйство)',
            self::DNP            => 'ДНП (дачное некоммерческое партнероство)',
            self::SNT            => 'СНТ (садоводческое некоммерческое товарищество)',
        ];
    }
}
