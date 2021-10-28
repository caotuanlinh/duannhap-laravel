<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ResgisterController extends Controller
{
    public function getRegis(){
        return view('register');
    }
    public function postRegis(Request $request){
        $user = new User();
        $user['type'] = 1;
        $user->fill($request->all());
        $user->save();
        return view('admin.auth.login');
    }
}
