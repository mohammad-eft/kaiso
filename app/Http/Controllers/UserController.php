<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\phone_code;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Log;

class UserController extends Controller
{
    public function store(Request $request){
        $validate = $request->validate(
            [ 
                'phonenumber' => ['required' , 'max:11'],
                'password' => ['required'],   
                'code' => ['required'],   
            ],
            [
             'phonenumber.required' => 'لطفا شماره تلفن خود را وارد کنید',
             'phonenumber.max' => 'تعداد کاراکتر های مجاز 11 عدد میباشد',
             'password.required' => 'لطفا رمز خود را وارد کنید',   
             'code.required' => 'لطفا کد را وارد کنید',   
            ]
        );
        if ($request->end_code == $request->code) {
            User::create([
                'name' => $request->name,
                'family' => $request->family,
                'phonenumber' => $request->phonenumber,
                'password' => Hash::make($request->password),
            ]);
        }else{
            return to_route("user.create")->with('message' , 'کد وارد شده اشتباه است لطفا دوباره امتحا کنید');
        }
    }   
    public function profile(){
        return "profile";
    }
    public function log_out(){
        if (Auth::check()) {
            Auth::logout();
        }
    }
    public function document_login(){
        return view("login_user");
    }
    public function sing_up(){
        return view("singup"); 
    }
    public function delete(User $user){
        $user->delete();
        return to_route("user.profile");
    }
    public function edit(User $user){
        return view("edit_user" , ['user' => $user]);
    }
    public function update(Request $request){
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->family = $request->family;
        $user->phonenumber = $request->phonenumber;
        $user->password = $request->password;
        $user->email = $request->email;
        $file_name = request()->file('main_img')->getClientOriginalName();
        request()->file('main_img')->storeAs('img' , $file_name , 'public');
        $user->main_img = $file_name;
        $user->save();

    }
    public function sendCode(Request $request){
        $code = 0;
        $phonenumber  = $request->input('phonenumber');
        $codee = $request->input('code');
        $code_create = $request->input('code_create');
        $true_or_false = false;
        $user = User::where('phonenumber' , $phonenumber)->first();
        Log::info($phonenumber);
        // Log::info($code_create);
        if (!$user && $codee) {
            return response()->json("yes");
        }
        if ($user && $code_create) {
            return response()->json("yes_no");
        }
        if (!$user && $code_create || $user && $codee){
            $code = rand(1000, 10000);
            phone_code::upsert(['phoneNumber' => $phonenumber , 'code' => $code], ['phoneNumber'], ['code']);
            $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
            $client = new \IPPanel\Client($apiKey);
            $patternValues = [
                'activation_code' => $code,
            ];
            $bulkID = $client->sendPattern(
                '7fvdx77gveizxqn',  // pattern code
                '+983000505',  // originator
                $phonenumber,  // recipient
                $patternValues,  // pattern values
            );
        }
        Log::info($code);
        return response()->json($code);
    }
    public function del_code(Request $request){
        $code = phone_code::where('code' , $request->input('del_code'))->first();
        $code->delete();
    }
}
