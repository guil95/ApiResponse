<?php

namespace ApiResponse\Encoding\Encodings;

class Json implements EcondingInterface
{
    /**
     * @param array $data
     * @param string|null $root
     * @return string
     */
    public static function create(array $data, ?string $root): string
    {
        return json_encode($data);
    }
}