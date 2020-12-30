<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Dictionary;

interface IDictionary
{
    public function __construct(string $attribute, array $options, string $variant = null);

    public function attribute(): string;

    /**
     * @return IOption[]
     */
    public function options(): array;

    public function variant(): ?string;
}
