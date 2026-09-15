<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class storeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $user = User::where('phonenumber' , $request->phonenumber)->first();
        if (isset($user)) {
            if (Hash::check($request->password , $user->password) || $request->code === $request->end_code) {
                if (!Auth::check()) {
                    Auth::login($user);
                }
                return to_route("user.profile");
            }else{
                return to_route("user.login")->with('message' , 'رمز وارد شده اشتباه است');
            }
        }else{
            return to_route("user.create")->with('message' , 'لطفا اول ثبت نام کتید');
        }
        return $next($request);
    }
}
