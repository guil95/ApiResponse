<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 25/02/19
 * Time: 08:55
 */

namespace Tests\Status;


use ApiResponse\Status\StatusResponse;
use PHPStan\Testing\TestCase;

class StatusResponseTest extends TestCase
{
    public function testStatusCreate()
    {
        StatusResponse::create(200);
        $this->assertEquals(200, http_response_code());
    }
}