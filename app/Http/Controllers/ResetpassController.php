<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetpassController extends Controller
{
    public function reset(){
        return view('admin.registration.add-form');
    }
    public function SaveReset( Request $request){
        
        // $pass_DB = DB::table('users')->find($id)->password;
        // // dd($pass_DB)
        // // $pass_nhap = Hash::make($request->password_old);
        // if (Hash::check($request->password_old,$pass_DB)) {
        //     $reset = User::find($id);
        //     $reset->password = bcrypt($request->password2);
        //     // dd($reset);
        //     $reset ->save();
        //     return redirect(route('room.index'));
        // }else{
        //     return redirect()->back()->with('msg','Mật khẩu cũ không đúng');
        // }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           $id = Auth::user()->id;
           $reset = User::find($id);        
           $reset->password = bcrypt($request->password2);
           $reset->save();
           return redirect(route('room.index'));
        }
        else{
                return redirect()->back()->with('msg','Kiểm tra lại Email hoặc Pass');
            }


        
    }
}
