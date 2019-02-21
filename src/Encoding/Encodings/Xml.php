<?php

namespace ApiResponse\Encoding\Encodings;

use Spatie\ArrayToXml\ArrayToXml;

class Xml implements EcondingInterface
{

    /**
     * @param array $data
     * @param string|null $root
     * @return string
     */
    public static function create(array $data, ?string $root): string
    {
        $options = [];

       if($root){
         $options['rootElementName'] = $root;
       }

        return ArrayToXml::convert(
            $data,
            $options,
            true,
            'UTF-8');
    }

}