<?php

declare(strict_types=1);

namespace Homeapp\JsonApi;

/** Интерфейс для DTO, которые возвращаются в качестве тела ответа */
interface JsonApiDocumentBodyInterface
{
    /**
     * @deprecated Перенесено в JsonApiResourceObjectInterface
     */
    public function addConsistencyData(string $message): void;

    public function withSentFieldsCollection(SentFieldsCollection $fields): void;
}
