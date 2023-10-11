<?php

namespace App\Http\Responses;

class ApiFailureResponse
{
    public static function fail($message,$data)
    {
        return [
            'success' => true,
            'status_code' => 500,
            'message' => $message,
            'data' => $data,
        ];
    }
}
