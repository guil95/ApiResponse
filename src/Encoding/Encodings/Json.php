<?php

namespace ApiResponse\Encoding\Econdigs;

class Json
{
    public static function create(array $data): string
    {
        return json_encode($data);
    }
}