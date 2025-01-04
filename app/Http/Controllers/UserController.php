<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserListRepositoryInterface;

class UserController extends Controller
{
    public $userListRepository;
    
    public function __construct(UserListRepositoryInterface $userListRepository){
        $this->userListRepository = $userListRepository;

    }
    public function index(){
        if($this->middleware('isAdmin')){
            $users = $this->userListRepository->allUserList();
            return view('admin.usersList', compact('users'));
        }
        
    }
}
