<?php

declare(strict_types=1);
namespace Homeapp\JsonApi\Exception;

use Homeapp\JsonApi\Error\ErrorsDocument;
use Symfony\Component\Asset\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;

class JsonApiMultipleErrorException extends JsonApiBaseException
{
    private ErrorsDocument $errorDocument;

    protected static function getHttpCode(): int
    {
        return Response::HTTP_CONFLICT;
    }

    public static function createWithErrorDocument(ErrorsDocument $errorDocument): self
    {
        $exception = new static();
        $exception->errorDocument = $errorDocument;
        $exception->code = static::getHttpCode();

        return $exception;
    }

    public function getErrorDocument(): ErrorsDocument
    {
        return $this->errorDocument;
    }
}
