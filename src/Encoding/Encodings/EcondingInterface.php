<?php

namespace ApiResponse\Encoding\Encodings;


interface EcondingInterface
{
    /**
     * @param array $data
     * @param string|null $root
     * @return string
     */
    public static function create(array $data, ?string $root): string;
}