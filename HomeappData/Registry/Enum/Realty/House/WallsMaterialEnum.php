<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Enum\Realty\House;

class WallsMaterialEnum
{
    public const BRICK = 'brick';
    public const TIMBER = 'timber';
    public const WOOD = 'wood';
    public const AERATED_CONCRETE = 'aerated_concrete';
    public const REINFORCED_CONCRETE = 'reinforced_concrete';
    public const FRAME_METAL = 'frame_metal';
    public const FRAME_WOOD = 'frame_wood';
    public const FOAM_BLOCK = 'foam_block';
    public const SANDWICH_PANELS = 'sandwich_panels';
    public const MONOLITH = 'monolith';
    public const SHIELD = 'shield';

    public static function getNames(): array
    {
        return [
            self::BRICK               => 'Кирпичный',
            self::TIMBER              => 'Брус',
            self::WOOD                => 'Бревно',
            self::AERATED_CONCRETE    => 'Газобетон',
            self::REINFORCED_CONCRETE => 'Железобетон',
            self::FRAME_METAL         => 'Каркасный из металла',
            self::FRAME_WOOD          => 'Каркасный из дерева',
            self::FOAM_BLOCK          => 'Пенобетон',
            self::SANDWICH_PANELS     => 'Сэндвич панели',
            self::SHIELD              => 'Щитовой',
            self::MONOLITH            => 'Мнолитный',
        ];
    }
}
