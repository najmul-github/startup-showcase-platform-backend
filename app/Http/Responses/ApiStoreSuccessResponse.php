<?php

namespace App\Http\Responses;

class ApiStoreSuccessResponse
{
    public static function success($message,$data)
    {
        return [
            'success' => true,
            'status_code' => 201,
            'message' => $message,
            'data' => $data,
        ];
    }
}
