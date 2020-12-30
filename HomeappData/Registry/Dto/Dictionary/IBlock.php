<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Dictionary;

interface IBlock
{
    public function __construct(IDictionary ...$list);

    public function entity(): string;

    /**
     * @return IDictionary[]
     */
    public function dictionaryList(): array;
}
