<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryImpl;

class UserServiceImpl implements UserService
{
    protected $pitch;

    public function __construct(UserRepositoryImpl $pitch)
    {
        $this->pitch = $pitch;
    }
    public function getProfile($id)
    {
        $condition = [];
        $condition[] = ['id',$id];
        return $this->pitch->getProfile($condition);
    }

    public function store($data)
    {
        return $this->pitch->store($data);
    }
}
