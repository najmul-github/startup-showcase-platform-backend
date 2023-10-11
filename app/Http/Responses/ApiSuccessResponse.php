<?php

namespace App\Http\Responses;

class ApiSuccessResponse
{
    public static function success($message,$data)
    {
        return [
            'success' => true,
            'status_code' => 200,
            'message' => $message,
            'metadata' => [
                'page' => 1,
                'limit' => 50,
                'count' => count($data),
            ],
            'data' => $data,
        ];
    }
}
