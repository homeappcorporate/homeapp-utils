<?php

declare(strict_types=1);

namespace Homeapp\JsonApi\Resolver;

use Homeapp\JsonApi;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class SentFieldsResolver implements ArgumentValueResolverInterface
{
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        return $argument->getType() === JsonApi\SentFieldsCollection::class;
    }

    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        $data = json_decode($request->getContent(), false, 512, JSON_THROW_ON_ERROR);
        yield new JsonApi\SentFieldsCollection(
            array_keys(get_object_vars($data->data->attributes)),
            array_keys(get_object_vars($data->data->relationships))
        );
    }
}
