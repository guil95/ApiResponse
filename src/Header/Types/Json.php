<?php

namespace ApiResponse\Header\Types;

class Json implements TypeInterface
{
    public static function create()
    {
        header('Content-Type: application/json');
    }
}