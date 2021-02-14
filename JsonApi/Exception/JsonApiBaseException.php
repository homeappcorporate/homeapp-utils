<?php

declare(strict_types=1);
namespace Homeapp\JsonApi\Exception;

use Symfony\Component\Asset\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;

abstract class JsonApiBaseException extends InvalidArgumentException
{
    protected ?string $parameter = null;
    protected ?string $pointer = null;

    public static function create(string $message, ?string $parameter = null): self
    {
        $exception = new static();
        $exception->message = $message;
        $exception->parameter = $parameter;
        $exception->code = static::getHttpCode();

        return $exception;
    }

    public static function createWithPointer(string $message, string $pointer): self
    {
        $exception = new static();
        $exception->message = $message;
        $exception->pointer = $pointer;
        $exception->code = static::getHttpCode();

        return $exception;
    }

    abstract protected static function getHttpCode(): int;

    public function getParameter(): ?string
    {
        return $this->parameter;
    }

    public function getPointer(): ?string
    {
        return $this->pointer;
    }
}