<?php

namespace ApiResponse\Encoding\Encodings;

class Json implements EcondingInterface
{
    /**
     * @param array $data
     * @param array|null $options
     * @return string
     */
    public static function create(array $data, ?array $options): string
    {
        return json_encode($data);
    }
}