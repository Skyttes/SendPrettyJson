<?php
namespace Skyttes\PrettyJson\Traits;
use Nette\Utils\Json;
use Skyttes\PrettyJson\Response\JsonResponse;

trait TSendPrettyJson
{

    public function sendJson($data, $jsonFlag=null): void
    {
        $this->sendResponse(new JsonResponse($data, $jsonFlag));
    }

    public function sendPrettyJson($data): void
    {
        $this->sendJson($data, Json::PRETTY);
    }

}