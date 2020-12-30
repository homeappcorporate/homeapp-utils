<?php declare(strict_types=1);

namespace Homeapp\JsonApi\Error;

use Homeapp\JsonApi\JsonApiResponseInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * JsonApi-документ, состоящий из списка ошибок
 */
class ErrorsDocument implements JsonApiResponseInterface
{
    /**
     * @var Error[]
     * @Serializer\Type("array<Homeapp\JsonApi\Error\Error>")
     * @Serializer\Groups({"API"})
     */
    public array $errors;

    public function __construct(Error ...$errors)
    {
        $this->errors = $errors;
    }
}
