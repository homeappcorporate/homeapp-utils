<?php 
declare(strict_types=1);
namespace Homeapp\JsonApi\Exception;

use Symfony\Component\Asset\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;

class JsonApiBadRequestException extends JsonApiBaseException
{
    protected static function getHttpCode(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }
}
