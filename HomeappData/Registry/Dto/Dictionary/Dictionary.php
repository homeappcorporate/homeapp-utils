<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Dictionary;

use Homeapp\HomeappData\Registry\Dto\Dictionary\IDictionary;
use JMS\Serializer\Annotation as Serializer;

class Dictionary implements IDictionary
{
    private string  $attr;
    private array   $opts;
    private ?string $var;

    public function __construct(string $attribute, array $options, string $variant = null)
    {
        $this->attr = $attribute;
        $this->opts = $options;
        $this->var = $variant;
    }

    /**
     * @Serializer\Groups("DICTIONARY")
     * @Serializer\VirtualProperty()
     */
    public function attribute(): string
    {
        return $this->attr;
    }

    /**
     * @Serializer\Groups("DICTIONARY")
     * @Serializer\VirtualProperty()
     */
    public function options(): array
    {
        $res = [];
        foreach ($this->opts as $key => $val) {
            $res[] = new Option($key, $val);
        }
        return $res;
    }

    /**
     * @Serializer\Groups("DICTIONARY")
     * @Serializer\VirtualProperty()
     */
    public function variant(): ?string
    {
        return $this->var;
    }
}
