<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomFormRequest;
use App\Models\Room;
use App\Models\Room_Services;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RoomsController extends Controller
{
    public function index(Request $request){
        
        $searchData = $request->except('page');
        $room = Room::paginate(3);
        $productQuery = Room::where('room_no', 'like', "%" .$request->keyword . "%");
        $room = $productQuery->paginate(3)->appends($request->except('page'));
        // if (($request->keyword)!= "") {
        //     $room = Room::where("room_no","like","%".$request->keyword . "%")->get();
            
        // } else {
        //     $room = Room::paginate(3);
        // }
        // if (count($request->all()) == 0) {
        //     $room = Room::paginate(15);
        // } else{
        //     $productQuery = Room::where('room_no', 'like', "%" .$request->keyword . "%");
        //     $room
        // }


        
                      
        return view('admin.rooms.index', compact('room'));
    }
    public function remove($id){
        // Room::destroy($id);
        $room = Room::find($id);
        $linh = 'storage/'.$room->image;
       
        $room->service()->detach();
        if (file_exists($linh)) {
            unlink($linh);
        }
        $room->delete();

        return redirect()->back();
    }
    public function editForm($id){
        $room = Room::find($id);
        if(!$room){
            return redirect()->back();
        }
        $service = Services::all();
        $room_servi = DB::table('flights_room_services')->where('room_id', $id)->pluck('servi_id')->toArray();
        return view('admin.rooms.edit-form', compact('room', 'service','room_servi'));
    }
    public function saveEdit($id, RoomFormRequest $request){
        $room = Room::find($id); 
        if(!$room){
            return redirect()->back();
        }
       
        // upload ảnh
        if($request->hasFile('uploadfile')){
            $path = $request->file('uploadfile')->storeAs('public/uploads/rooms', uniqid() . '-' . $request->uploadfile->getClientOriginalName());
            $room->image = str_replace('public/', '', $path);
            // $room->image = $request->file('uploadfile')->storeAs('uploads/rooms', uniqid() . '-' . $request->uploadfile->getClientOriginalName());
        }
        $room->service()->sync($request->servi_id);
        $room->fill($request->all());
        $room->save();
        return redirect(route('room.index'));
    }
    public function addForm(){
        $service = Services::all();
        return view('admin.rooms.add-form', compact('service'));
    }


    public function saveAdd(Request $request){
        // dd($request->all());
        $request->validate(
            [
                'uploadfile'=>'required'
            ],
            [
                'uploadfile.required'=>'Hãy chọn ảnh sản phẩm '
            ]
        );
        // $room = new Room(); 
        // $room->fill($request->all());
        // upload ảnh
        if($request->hasFile('uploadfile')){
            $path = $request->file('uploadfile')->storeAs('public/uploads/rooms', uniqid() . '-' . $request->uploadfile->getClientOriginalName());
            $image = str_replace('public/', '', $path);          
        }
        $room = Room::create([
            'room_no' => $request->room_no,
            'image'=> $image,
            'floor'=> $request->floor,
            'price'=>$request->price,
            'detail'=>$request->detail
        ]);
        foreach($request->servi_id as $value){
            Room_Services::create([
                'room_id' => $room->id,
                'servi_id'=>$value
            ]);
        }

        return redirect(route('room.index'));
    }
}
