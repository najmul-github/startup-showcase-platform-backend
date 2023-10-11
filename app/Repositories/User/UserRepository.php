<?php
namespace App\Repositories\User;
interface UserRepository
{
    public function getProfile($id);
    public function store($data);
}
