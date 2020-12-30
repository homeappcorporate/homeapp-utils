<?php declare(strict_types=1);

namespace Homeapp\HomeappData\Registry\Dto\Dictionary\Address;

use Homeapp\HomeappData\Registry\Dto\Dictionary\IBlock;
use Homeapp\HomeappData\Registry\Dto\Dictionary\IDictionary;
use Homeapp\HomeappData\Registry\Enum\EntityNameEnum;
use JMS\Serializer\Annotation as Serializer;

class AddressBTI implements IBlock
{
    private array $list;

    public function __construct(IDictionary ...$list)
    {
        $this->list = $list;
    }

    /**
     * @Serializer\Groups("DICTIONARY")
     * @Serializer\VirtualProperty()
     */
    public function entity(): string
    {
        return EntityNameEnum::ADDRESS_BTI;
    }

    /**
     * @inheritDoc
     * @Serializer\Groups("DICTIONARY")
     * @Serializer\VirtualProperty()
     */
    public function dictionaryList(): array
    {
        return $this->list;
    }
}
