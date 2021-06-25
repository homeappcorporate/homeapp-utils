<?php
namespace Homeapp\UtilsBundle\Logger;

use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Psr7\BufferStream;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class NoBinaryFormatter extends MessageFormatter
{
    public function format(
        RequestInterface $request,
        ResponseInterface $response = null,
        \Exception $error = null
    ) {
        if ($response !== null) {
            $body = $response->getBody();
            $bodyString = (string) $body;
            if ($body->isSeekable()) {
                $body->seek(0);
            }
            if (false === mb_detect_encoding($bodyString, 'UTF-8', true)) {
                $stream = new BufferStream();
                $stream->write('-------- Binary data -------');
                $response = $response->withBody($stream);
            }
        }

        return parent::format($request, $response, $error);
    }
}
