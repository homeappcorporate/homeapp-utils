<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Dictionary;

interface IOption
{
    public function key(): string;

    public function value(): string;
}
