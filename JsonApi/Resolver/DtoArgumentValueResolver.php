<?php

declare(strict_types=1);

namespace Homeapp\JsonApi\Resolver;

use Homeapp\JsonApi;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class DtoArgumentValueResolver implements ArgumentValueResolverInterface
{
    private SerializerInterface $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        return stripos($argument->getType(), 'Homeapp\\Dto') === 0;
    }

    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        $content = $request->getContent();

        /** @var JsonApi\CompoundDocument $data */
        $data = $this->serializer->deserialize($content, JsonApi\CompoundDocument::class, 'json');

        $fieldsData = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
        $data->withSentFieldsCollection(new JsonApi\SentFieldsCollection(
            array_keys(get_object_vars($fieldsData->data->attributes)),
            array_keys(get_object_vars($fieldsData->data->relationships))
        ));

        yield $data;
    }
}
