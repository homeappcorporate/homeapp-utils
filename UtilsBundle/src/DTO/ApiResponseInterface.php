<?php
namespace Homeapp\UtilsBundle\DTO;

interface ApiResponseInterface
{
    /** @return mixed Для сериализации тела ответа */
    public function getSerializationBlock();

    public function getStatus(): int;

    public function getHeaders(): array;

    public function getContextGroups(): array;
}