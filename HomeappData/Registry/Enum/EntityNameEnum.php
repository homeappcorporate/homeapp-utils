<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum;

class EntityNameEnum
{
    public const REALTY = 'realty';
    public const ADDRESS = 'address';
    public const ADDRESS_BTI = 'addressBti';
    public const COMPLEX = 'complex';
    public const REALTY_IMAGE = 'realtyImage';
    public const IMAGE = 'image';
    public const ADDRESS_METRO_DIST = 'addressMetroDistance';
    public const REALTY_METRO_DIST = 'realtyMetroDistance';
    public const METRO_STATION = 'metroStation';
    public const HOUSE_HIGHWAY_DISTANCE = 'houseHighwayDistance';
    public const HIGHWAY = 'highway';
    public const EXTERNAL_LINK = 'externalLink';
    public const DISTRICT = 'district';
    public const CITY_AREA = 'cityArea';

    public static function getNames(): array
    {
        return [
            self::REALTY => 'Объект недвижимости',
            self::ADDRESS => 'Адрес',
            self::ADDRESS_BTI => 'БТИ параметры',
            self::COMPLEX => 'Жилой комплекс',
            self::REALTY_IMAGE => 'Изображение объекта недвижимости',
            self::IMAGE => 'Изображение',
            self::ADDRESS_METRO_DIST => 'Расстояние от адреса до метра',
            self::REALTY_METRO_DIST => 'Расстояние от объекта недвижимости до метро',
            self::METRO_STATION => 'Станция метро',
            self::HOUSE_HIGHWAY_DISTANCE => 'Расстояние от дома до города по трассе',
            self::HIGHWAY => 'Трасса',
            self::EXTERNAL_LINK => 'Ссылка на площадку',
            self::DISTRICT => 'Район',
            self::CITY_AREA => 'Административный округ',
        ];
    }
}
