<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        $post=$request->all();
        $email=$post['email'];
        $password=$post['password'];
        if (Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect()->intended('admin');
        }
        return back()->with('error','没有权限');
    }

    public function logout()
    {
        Auth::logout();
        return view('admin.login');
    }


    
        
    
}
