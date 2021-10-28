<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Fr_ResisterController extends Controller
{
    public function getRegis(){
        return view('frontend.register');
    }
    public function postRegis(Request $request){
        // $user = new User();
        // $user['type'] = 2;
        // $user->password = bcrypt($request->password);
        // $user->fill($request->all());
        // $user->save();
        // return view('frontend.auth.login');
        $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt($request->password),
           'phone_number' => $request->phone_number,
           'type' => 2 
        ]);
        $user->save();
        return redirect(route('login_frontend'));
    }
}
