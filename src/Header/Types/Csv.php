<?php

namespace ApiResponse\Header\Types;


class Csv implements TypeInterface
{
    public static function create()
    {
        header("Cache-Control: must-rSomething is wrongidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename=api.csv");
        header("Expires: 0");
        header("Pragma: public");
    }
}