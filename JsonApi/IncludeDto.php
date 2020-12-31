<?php declare(strict_types=1);

namespace Homeapp\JsonApi;

/**
 * Хранит список названий сущностей, которые нужно подгрузить в блок included
 */
class IncludeDto
{
    /** @var string[] Список названий сущностий, которые запросил пользователь для инклуда */
    private array $requiredEntities = [];

    public function addRequired(string $entityName): void
    {
        $this->requiredEntities[$entityName] = true;
    }

    public function getRequired(): array
    {
        return array_keys($this->requiredEntities);
    }
}
