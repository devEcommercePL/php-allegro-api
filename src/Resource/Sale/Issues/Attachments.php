<?php

namespace Imper86\PhpAllegroApi\Resource\Sale\Issues;

use Imper86\PhpAllegroApi\Resource\AbstractResource;
use Psr\Http\Message\ResponseInterface;

class Attachments extends AbstractResource {
    public function get(string $attachmentId): ResponseInterface {
        return $this->apiGet("/sale/issues/attachments/$attachmentId", [], '*/*');
    }
}
