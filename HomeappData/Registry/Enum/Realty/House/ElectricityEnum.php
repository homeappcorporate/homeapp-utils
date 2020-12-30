<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\House;

class ElectricityEnum
{
    public const NONE = 'none';
    public const CONNECTED = 'connected';
    public const POSSIBLE = 'possible';
    public const AUTONOMOUS = 'autonomous';


    public static function getNames(): array
    {
        return [
            self::NONE       => 'Нет',
            self::CONNECTED  => 'Подключено',
            self::POSSIBLE   => 'Возможно',
            self::AUTONOMOUS => 'Автономное',
        ];
    }
}
