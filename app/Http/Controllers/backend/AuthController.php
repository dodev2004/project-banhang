<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login(){
        
        return view("backend.auth.templates.login");
    }
    public function auth(LoginRequest $request ){
        $dataCheck = $request->only([
            "email","password"
        ]);
       if(Auth::attempt($dataCheck,true)){
          $request->session()->regenerate();
          return redirect()->route("admin.dashboard");
       }
       else {
        return redirect()->route('admin.login')->with("message","Tài khoản hoặc mật khẩu không chính xác");
       }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("admin.login");
    }
}
