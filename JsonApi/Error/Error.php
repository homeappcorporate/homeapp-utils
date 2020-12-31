<?php declare(strict_types=1);

namespace Homeapp\JsonApi\Error;

use JMS\Serializer\Annotation as Serializer;

/**
 * Описание одной ошибки по JsonApi
 */
class Error
{
    /**
     * @var ErrorSource|null
     * @Serializer\Type("Homeapp\JsonApi\Error\ErrorSource")
     * @Serializer\Groups({"API"})
     */
    public ?ErrorSource $source = null;

    /**
     * Подробное текстовое описание ошибки
     * @var string
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function withPointer(string $pointer): self
    {
        if ($this->source === null) {
            $this->source = new ErrorSource();
        }
        $this->source->pointer = $pointer;

        return $this;
    }

    public function withParameter(string $parameter): self
    {
        if ($this->source === null) {
            $this->source = new ErrorSource();
        }
        $this->source->parameter = $parameter;

        return $this;
    }
}
