<?php declare(strict_types=1);

namespace Homeapp\UtilsBundle\Listener;

use Homeapp\UtilsBundle\DTO\ApiResponse;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;

class ApiResponseListener
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function onKernelView(GetResponseForControllerResultEvent $event)
    {
        $result = $event->getControllerResult();
        if (!$result instanceof ApiResponse) {
            return;
        }
        $groups = !empty($result->getContextGroups()) ? $result->getContextGroups() : ['API'];
        $cnt = SerializationContext::create();
        if (!empty($groups)) {
            $cnt->setGroups($groups);
        }
        $body = $this->serializer->serialize($result, 'json', $cnt);
        $response = new JsonResponse($body, $result->getStatus(), [], true);
        $event->setResponse($response);
    }
}
