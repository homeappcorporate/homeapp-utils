<?php declare(strict_types=1);

namespace Homeapp\JsonApi;

interface ResourceObjectInterface
{
    public function addConsistencyData(string $message): void;

    public function redefineMeta(Meta\ResourceObjectMeta $clientMeta): void;
}
