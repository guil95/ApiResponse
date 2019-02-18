<?php

namespace ApiResponse\Encoding;

use ApiResponse\Encoding\Econdigs\Json;

class EncodingResponse
{
    public static function returnEncoding(array $data, string $type)
    {
        switch ($type){
            case 'json':
                return Json::create($data);
                break;
            default:
                Json::create($data);
                break;
        }
    }
}