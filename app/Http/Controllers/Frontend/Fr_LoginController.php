<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Fr_LoginController extends Controller
{
    public function login(){
        return view('frontend.auth.login');
    }
    public function postlogin(Request $request){
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
        $info = $request->only('email', 'password');
        $info['type'] = 2;
        if (Auth::attempt($info)) {
           return redirect(route('front_room_list'));
        }else{
            return redirect()->back()->with('msg','Sai thông tin đăng nhập');
        }
        
    }
}
