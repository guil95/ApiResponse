<?php
namespace ApiResponse\Status;

class StatusResponse
{
    public static function create(int $status)
    {
        http_response_code($status);
    }
}