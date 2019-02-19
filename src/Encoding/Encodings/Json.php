<?php

namespace ApiResponse\Encoding\Encodings;

class Json
{
    public static function create(array $data): string
    {
        return json_encode($data);
    }
}