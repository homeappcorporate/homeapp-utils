<?php declare(strict_types=1);

namespace Homeapp\JsonApi;

interface ResourceObjectInterface
{
    /**
     * @param string $message
     * @param string[] $fields
     */
    public function addConsistencyData(string $message, array $fields = []): void;

    public function redefineMeta(Meta\ResourceObjectMeta $clientMeta): void;
}
