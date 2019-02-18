<?php

namespace ApiResponse\Header\Types;

class Json
{
    public static function create()
    {
        header('Content-Type: application/json');
    }
}