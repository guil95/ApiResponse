<?php

namespace ApiResponse\Encoding;

use ApiResponse\Encoding\Encodings\Csv;
use ApiResponse\Encoding\Encodings\Json;
use ApiResponse\Encoding\Encodings\Xml;

class EncodingResponse
{
    /**
     * @param array $data
     * @param string $type
     * @param string|null $root
     * @return string
     */
    public static function returnEncoding(array $data, string $type, ?string $root)
    {
        switch ($type){
            case 'json':
                return Json::create($data, null);
                break;
            case 'xml':
                return Xml::create($data, $root);
                break;
            case 'csv':
                Csv::create($data);
                break;
            default:
                return Json::create($data, null);
                break;
        }
    }
}