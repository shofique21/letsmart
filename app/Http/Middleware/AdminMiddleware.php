<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AdminUser;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    
        $adminUser = AdminUser::where('username', $request->username)->first();
        $adminInfo = Session::get('adminInfo');
        if($adminInfo){
            return $next($request);
        }else{
            if (!$adminUser) {
                return redirect()->route('adminLogin')->withErrors(['message' => 'Login Fail, please check username']);
             }
             if (!Hash::check($request->password, $adminUser->password)) {
                 //return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
                return redirect()->route('adminLogin')->withErrors(['message' => 'Login Fail, please check password']);
             }
            return $next($request);
        }
        
    }
}
