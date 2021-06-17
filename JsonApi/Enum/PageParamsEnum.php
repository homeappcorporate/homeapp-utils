<?php 

declare(strict_types=1);

namespace Homeapp\JsonApi\Enum;

class PageParamsEnum
{
    public const LIMIT = 'limit';

    public const OFFSET = 'offset';

    public static function getNames(): array
    {
        return [
            self::LIMIT => 'Количество элементов',
            self::OFFSET => 'Offset'
        ];
    }
}
