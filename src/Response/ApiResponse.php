<?php
namespace ApiResponse\Response;

use ApiResponse\Encoding\EncodingResponse;
use ApiResponse\Header\HeaderResponse;
use ApiResponse\Status\StatusResponse;

class ApiResponse extends Response
{

    private function __construct(array $data, int $status, ?string $root, $type)
    {
        if (!in_array($status, self::HTTP_VALID_CODES)) {
            throw new \InvalidArgumentException(sprintf('The HTTP status code "%s" is not valid.', $status));
        }

        HeaderResponse::createHeader($type);
        StatusResponse::create($status);
        echo EncodingResponse::returnEncoding($data, $type, $root);
    }

    /**
     * @param array $data
     * @param int $status
     */
    public static function json(array $data, int $status)
    {
        new self($data, $status, null, 'json');
    }

    /**
     * @param array $data
     * @param int $status
     * @param string|null $root
     */
    public static function xml(array $data, int $status, ?string $root)
    {
        new self($data, $status, $root, 'xml');
    }

}