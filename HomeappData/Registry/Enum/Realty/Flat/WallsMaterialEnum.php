<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\Flat;


class WallsMaterialEnum
{
    public const BRICK = 'brick';
    public const MONOLITH = 'monolith';
    public const MONOBRICK = 'monobrick';
    public const TIMBER = 'timber';
    public const PANEL = 'panel';
    public const BLOCK = 'block';

    public static function getNames(): array
    {
        return [
            self::BRICK     => 'Кирпичный',
            self::MONOLITH  => 'Монолитный',
            self::MONOBRICK => 'Монолитно-кирпичный',
            self::TIMBER  => 'Деревянный',
            self::PANEL  => 'Панельный',
            self::BLOCK  => 'Блочный',
        ];
    }
}
