<?php declare(strict_types=1);

namespace Homeapp\UtilsBundle\DTO;

use JMS\Serializer\Annotation as Serializer;

class PageData
{
    /**
     * @var array
     * @Serializer\Type("array")
     * @Serializer\Groups({"API"})
     */
    private $page;
    /**
     * @var int
     * @Serializer\Type("integer")
     * @Serializer\Groups({"API"})
     */
    private $count;

    public function __construct(array $page, int $count)
    {
        $this->page = $page;
        $this->count = $count;
    }

    public function getPage(): array
    {
        return $this->page;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
