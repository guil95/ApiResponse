<?php
namespace ApiResponse\Header;

use ApiResponse\Header\Types\Json;
use ApiResponse\Header\Types\Xml;

class HeaderResponse
{
    public static function create(string $type)
    {
        switch ($type){
            case 'json':
                Json::create();
                break;
            case 'xml':
                Xml::create();
                break;
            default :
                Json::create();
                break;
        }
    }
}