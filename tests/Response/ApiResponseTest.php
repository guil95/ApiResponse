<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 21/02/19
 * Time: 18:09
 */

namespace Tests\Response;


use PHPUnit\Framework\TestCase;
use \ApiResponse\Response\ApiResponse;

class ApiResponseTest extends TestCase
{
    public function testStatusCodeException()
    {
        $this->expectException(\InvalidArgumentException::class);
        ApiResponse::json(['test' => 'test'], 5000);
    }
}