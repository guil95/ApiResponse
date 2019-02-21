<?php

namespace ApiResponse\Header\Types;

class Xml implements TypeInterface
{
    public static function create()
    {
        header('Content-Type: text/xml');
    }
}