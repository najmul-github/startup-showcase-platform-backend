<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Services\User\UserService;
use App\Http\Responses\ApiSuccessResponse;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }
    
    public function getProfile($id)
    {
        $users = $this->user->getProfile($id);

        return response()->json(ApiSuccessResponse::success('User Details', UserResource::collection($users)));
    }
}
