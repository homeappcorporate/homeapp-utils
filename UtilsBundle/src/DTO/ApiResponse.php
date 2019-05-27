<?php

namespace Homeapp\UtilsBundle\DTO;

use JMS\Serializer\Annotation as Serializer;
use Swagger\Annotations as SWG;

class ApiResponse
{
    /**
     * @Serializer\Groups({"API", "LIST", "SHORT"})
     * @Serializer\Type("boolean")
     * @var boolean Удалось ли выполнить бизнес-логику, требуемую в запрос
     */
    private $success;
    /**
     * @Serializer\Groups({"API", "LIST", "SHORT"})
     * @SWG\Property(type="array|string|null|integer")
     * @var mixed Данные, результат выполнения запроса
     */
    private $data;

    /**
     * @deprecated используется лишь для соответствия старому АПИ
     * @Serializer\Groups({"API", "LIST", "SHORT"})
     * @Serializer\SerializedName("message")
     * @Serializer\Type("string")
     * @var mixed используется лишь для соответствия старому АПИ
     */
    private $error;

    private $contextGroups;

    private $status;

    private $headers;

    public function __construct(
        $data,
        bool $success = true,
        array $contextGroups = [],
        int $status = 200,
        array $headers = []
    ) {
        $this->success = $success;
        $this->data = $data;
        $this->contextGroups = $contextGroups;
        $this->status = $status;
        $this->headers = $headers;
    }

    public static function createError(string $message, int $code, array $groups = []): ApiResponse
    {
        $obj = new self(['error' => $message], false, $groups, $code);
        $obj->error = $message;
        return $obj;
    }

    public static function createWait(string $message, int $waitSeconds, array $groups = []): ApiResponse
    {
        $obj = new self(['error' => $message], false, $groups, 503, ['retry-after' => $waitSeconds]);
        $obj->error = $message;
        return $obj;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function getData()
    {
        return $this->data;
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
}
