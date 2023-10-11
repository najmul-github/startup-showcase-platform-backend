<?php
namespace App\Services\User;
interface UserService
{
    public function getProfile($id);
    public function store($data);
}
