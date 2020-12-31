<?php declare(strict_types=1);

namespace Homeapp\JsonApi\Error;

use JMS\Serializer\Annotation as Serializer;

/**
 * Описывает, где конкретно допущена ошибка
 */
class ErrorSource
{
    /**
     * Из GET-строки
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $parameter = null;

    /**
     * JSON Pointer
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\Groups({"API"})
     */
    public ?string $pointer = null;
}
