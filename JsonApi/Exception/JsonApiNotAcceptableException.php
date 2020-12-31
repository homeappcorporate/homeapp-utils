<?php 
declare(strict_types=1);
namespace Homeapp\JsonApi\Exception;

use Symfony\Component\Asset\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;

class JsonApiNotAcceptableException extends InvalidArgumentException
{
    public static function create(string $message): self
    {
        $exception = new self();
        $exception->message = $message;
        $exception->code = Response::HTTP_NOT_ACCEPTABLE;

        return $exception;
    }
}