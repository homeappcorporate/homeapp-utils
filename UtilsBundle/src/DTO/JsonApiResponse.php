<?php

namespace Homeapp\UtilsBundle\DTO;

use JMS\Serializer\Annotation as Serializer;


class JsonApiResponse implements ApiResponseInterface
{
    private const HEADERS = [
        'Content type' => 'application/vnd.api+json'
    ];

    /**
     * @Serializer\Groups({"API"})
     * @var mixed Данные, результат выполнения запроса. Целиком, все тело ответа.
     */
    private $body;

    /** @var string[]  */
    private $contextGroups;

    /** @var int */
    private $status;

    /** @var array<string,string>  */
    private $headers;

    public function __construct(
        $data,
        array $contextGroups = [],
        int $status = 200,
        array $headers = []
    ) {
        $this->body = $data;
        $this->contextGroups = $contextGroups;
        $this->status = $status;
        $this->headers = array_merge(self::HEADERS, $headers);
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getContextGroups(): array
    {
        return $this->contextGroups;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    /** @return mixed */
    public function getSerializationBlock()
    {
        return $this->getBody();
    }
}
