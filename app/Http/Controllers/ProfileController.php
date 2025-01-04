<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function userProfile($id)
    {
            $userInfo = Auth::user();
            $myOrders = Order::where('user_id', $id)->get();
           return view('frontend.userProfile',compact('userInfo','myOrders'));
    }
}
