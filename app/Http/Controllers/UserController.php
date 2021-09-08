<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.index',compact('user') );
    }
    public function addForm(){
        return view('admin.user.add_form');
    }
    // public function saveAdd(Request $request)
    // {
    //     $servi = new Services();
    //     $servi->fill($request->all());
    //     $servi ->save();
    //     return redirect(route('servi.index'));
    // }
}
