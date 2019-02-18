<?php
namespace ApiResponse\Status;

class StatusResponse
{
    public function __construct(int $status)
    {
    }

    public static function create(int $status)
    {
        return new static($status);
    }
}