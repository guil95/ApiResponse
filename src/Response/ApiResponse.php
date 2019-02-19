<?php
namespace ApiResponse\Response;

use ApiResponse\Encoding\EncodingResponse;
use ApiResponse\Header\HeaderResponse;
use ApiResponse\Status\StatusResponse;

class ApiResponse extends Response
{

    public static function json(array $data, int $status)
    {

        if (!in_array($status, self::HTTP_VALID_CODES)) {
            throw new \InvalidArgumentException(sprintf('The HTTP status code "%s" is not valid.', $status));
        }

        HeaderResponse::createHeader('json');
        StatusResponse::create($status);
        echo EncodingResponse::returnEncoding($data, 'json');
    }

}