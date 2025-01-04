<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserListRepositoryInterface;

class UserListRepository implements UserListRepositoryInterface{

    public function allUserList(){
           return User::latest()->paginate(10);
    }
}
