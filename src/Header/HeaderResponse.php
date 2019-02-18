<?php
namespace ApiResponse\Header;

use ApiResponse\Header\Types\Json;

class HeaderResponse
{
    public static function createHeader(string $type)
    {
        switch ($type){
            case 'json':
                Json::create();
                break;
            default :
                Json::create();
                break;
        }
    }
}