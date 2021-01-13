<?php

declare(strict_types=1);

namespace Homeapp\JsonApi\Resolver;

use Homeapp\JsonApi;
use Homeapp\JsonApi\JsonApiDocumentBodyInterface;
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
        return false !== stripos($argument->getType(), 'CompoundDocument');
    }

    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        $content = $request->getContent();

        /** @var JsonApiDocumentBodyInterface $data */
        $data = $this->serializer->deserialize($content, $argument->getType(), 'json');

        $fieldsData = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
        $data->withSentFieldsCollection(new JsonApi\SentFieldsCollection(
            array_keys(get_object_vars($fieldsData->data->attributes)),
            array_keys(get_object_vars($fieldsData->data->relationships))
        ));

        yield $data;
    }
}
