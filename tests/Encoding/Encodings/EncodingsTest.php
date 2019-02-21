<?php

namespace Tests\Encoding\Encodings;


use ApiResponse\Encoding\Encodings\Json;
use ApiResponse\Encoding\Encodings\Xml;
use PHPUnit\Framework\TestCase;

class EncodingsTest extends TestCase
{
    public function testJson()
    {
        $this->assertJson(Json::create([
            'test' => 'test'
        ], null));
    }

    public function testXml()
    {
        $this->assertTrue(is_string(Xml::create([
            'test' => 'test'
        ], 'root')));
    }
}