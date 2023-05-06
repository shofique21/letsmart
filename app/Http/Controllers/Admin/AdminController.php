<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        if($adminInfo = Session::get('adminInfo')){
            Session::flush(); 
            return redirect()->route('adminLogin')->withErrors(['message' => 'thank you Successfully logged out']);
        }
        return view('admin.login');
    }

    public function adminLoginProcess(Request $request){

        $adminUser = AdminUser::where('username', $request->username)->first();
            if($adminUser->is_active == 1){
                $adminInfo = Session::put('adminInfo',$adminUser);
                return redirect()->route('dashboard');
            }else{
                return "Your account is deactive";
            }   
    }
    public function adminDashboard(){
        return view('admin.dashboard');
    }
}
