<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Dictionary;

use JMS\Serializer\Annotation as Serializer;

class Option implements IOption
{
    private string $k;
    private string $v;

    public function __construct(string $key, string $value)
    {
        $this->k = $key;
        $this->v = $value;
    }

    /**
     * @Serializer\Groups("DICTIONARY")
     * @Serializer\VirtualProperty()
     */
    public function key(): string
    {
        return $this->k;
    }

    /**
     * @Serializer\Groups("DICTIONARY")
     * @Serializer\VirtualProperty()
     */
    public function value(): string
    {
        return $this->v;
    }
}
