<?php 
declare(strict_types=1);
namespace Homeapp\JsonApi\Exception;

use Symfony\Component\Asset\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;

class JsonApiBadRequestException extends InvalidArgumentException
{
    private string $parameter;

    public static function create(string $message, string $parameter): self
    {
        $exception = new self();
        $exception->message = $message;
        $exception->parameter = $parameter;
        $exception->code = Response::HTTP_BAD_REQUEST;

        return $exception;
    }

    /**
     * @return string
     */
    public function getParameter(): string
    {
        return $this->parameter;
    }
}