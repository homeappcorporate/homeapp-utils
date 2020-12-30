<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty;

class DealTypeEnum
{
    public const FREE = 'free_sale';
    public const ALTERNATIVE = 'alternative';
    public const REASSIGNMENT = 'reassignment';
    public const DKP = 'DKP';
    public const DDU = 'DDU';
    public const PRE_SALE = 'pre_sale_contract';

    public static function getNames(): array
    {
        return array_merge(self::getRealtyNames(), self::getNewFlatNames());
    }

    public static function getRealtyNames(): array
    {
        return array_merge([
            self::FREE        => 'Свободная продажа',
            self::ALTERNATIVE => 'Альтернатива',
        ]);
    }

    public static function getNewFlatNames(): array
    {
        return [
            self::REASSIGNMENT => 'Договор уступки',
            self::DKP          => 'ДКП',
            self::DDU          => 'ДДУ',
            self::PRE_SALE     => 'Предварительный договор купли-продажи',
        ];
    }
}
