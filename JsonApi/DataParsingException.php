<?php declare(strict_types=1);

namespace Homeapp\JsonApi;

use LogicException;

class DataParsingException extends LogicException
{
    private const UNDEFINED_ID = 'entity id is undefined';
    private const INVALID_ENT_TYPE = 'invalid entity type:  passed %s, but expected %s';
    private const INVALID_BLOCK = 'invalid block: %s does not exists in %s';

    public static function idIsUndefined(): self
    {
        return new self(self::UNDEFINED_ID);
    }

    public static function invalidEntityType(string $passed, string $expected): self
    {
        return new self(sprintf(self::INVALID_ENT_TYPE, $passed, $expected));
    }
}
