<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        
        return view('admin.auth.login');
    }
    public function Postlogin(Request $request){
        $request->validate(
            [
             'email'=>'required|email',
             'password'=>'required',
             
            ],
            [
              'email.required' =>'Hãy nhập tài khoản ',
              'email.email' => 'Không đúng định dạng email',
              'password.required' => 'Hãy nhập mật khẩu'
            ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) ||
            Auth::attempt(['name' =>$request->email, 'password' =>$request->password]) ) {
           return redirect(route('room.index'));
        }else{
            return redirect()->back()->with('msg','Sai thông tin đăng nhập');
        }
        
    }
}
