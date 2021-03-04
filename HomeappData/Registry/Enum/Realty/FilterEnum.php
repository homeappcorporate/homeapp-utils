<?php
declare(strict_types=1);
namespace Homeapp\HomeappData\Registry\Enum\Realty;

/**
 * Допустимые значения для параметра filter для сущности Realty
 */
class FilterEnum
{
    public const ID_LIST     = 'id';
    public const UPDATED_AT  = 'updatedAt';
    public const CREATED_AT  = 'createdAt';
    public const REALTY_TYPE = 'realtyType';
    public const DISTRICT    = 'district';
    public const CITY_AREA   = 'cityArea';
    public const IS_HOMEAPP  = 'isHomeapp';
    public const IS_SOLD     = 'isSold';
    public const PRICE       = 'price';
    public const COORDINATES = 'coordinates';
    public const HAS_PINNED_IMAGE  = 'hasPinnedImage';
    public const FULL_ADDRESS = 'address.fullAddress';
    public const ROOM_COUNT   = 'roomCount';
    public const FLOOR        = 'floor';

    public static function getNames(): array
    {
        return [
            self::ID_LIST     => 'список id',
            self::UPDATED_AT  => 'дата обновления',
            self::CREATED_AT  => 'дата создания',
            self::REALTY_TYPE => 'тип',
            self::DISTRICT    => 'район',
            self::CITY_AREA   => 'административный округ',
            self::IS_HOMEAPP  => 'объект HomeApp',
            self::IS_SOLD     => 'продан или нет',
            self::PRICE       => 'диапазон цен',
            self::COORDINATES => 'координаты',
            self::HAS_PINNED_IMAGE  => 'картинки',
            self::FULL_ADDRESS => 'полный адрес',
            self::ROOM_COUNT   => 'колличество комнат',
            self::FLOOR        => 'этаж',
        ];
    }
}
