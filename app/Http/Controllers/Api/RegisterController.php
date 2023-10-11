<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Responses\ApiFailureResponse;
use App\Http\Responses\ApiStoreSuccessResponse;
use App\Services\User\UserService;

class RegisterController extends Controller
{
    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    public function register(CreateUserRequest $request)
    {
        $user = $this->user->store($request->all());

        if(!$user){ return response()->json(ApiFailureResponse::fail('User create unsuccessful', $user));}
         
        return response()->json(ApiStoreSuccessResponse::success('User created successfully', $user));
    }
}
