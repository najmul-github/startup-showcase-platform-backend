<?php
namespace App\Repositories\User;

use App\User;
use Illuminate\Support\Facades\Hash;

class UserRepositoryImpl implements UserRepository
{
    public function getProfile($condition)
    {
        return $users = User::where($condition)->get();;
    }    
    
    public function store($data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->mobile = $data['mobile'];
        $user->picture = $data['picture'];
        $user->password = Hash::make($data['password']);
        $user->save();

        return $user;
    }
}
