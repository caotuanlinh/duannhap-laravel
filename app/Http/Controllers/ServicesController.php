<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesRequest;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index(){
        $servi = Services::all();
        return view('admin.services.index',  compact('servi'));
    }
    public function remove($id){
        $servi = Services::find($id);
        $servi->rooms()->detach();
        // $servi = DB::table('')

        
        // dd($servi);
        $servi->delete();
        
       
        return redirect()->back();
    }
    public function editForm($id){
        $servi = Services::find($id);
        return view('admin.services.edit-form',  compact('servi'));
    }
    public function saveEdit($id, Request $request){
        $request->validate(
            [
               'name' => 'required|unique:flights_services',
            ],
            [
                'name.required' => 'Hãy nhập tên dịch vụ',
                'name.unique' => 'Tên dịch vụ đã tồn tại'
            ]
    );
        $servi = Services::find($id);
        $servi ->fill($request->all());
        $servi ->save();
        return redirect(route('servi.index'));

    }
    public function Form_Add(){
        return view('admin.services.add-form');
    }
    public function saveAdd(ServicesRequest $request)
    {
        $servi = new Services();
        $servi->fill($request->all());
        $servi ->save();
        return redirect(route('servi.index'));
    }
}
