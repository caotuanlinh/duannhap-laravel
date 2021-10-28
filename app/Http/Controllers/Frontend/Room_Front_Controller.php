<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Room_Front_Controller extends Controller
{
    public function index(){
        
        return view('frontend.index');
    }
    public function listRoom(Request $request){
        $room = Room::all();
        // $serchRoom = DB::table('flights_rooms')->where('room_no','like','%'.$request->keyword.'%');
        $room = DB::table('flights_rooms')->where('room_no','like','%'.$request->keyword.'%')->get();
        
       return view('frontend.rooms.list', compact('room' ));
    }

    public function Detail_room($id){
        $room = Room::find($id);
        return view('frontend.rooms.detail', compact('room'));
    }
    public function Booking($id){
        $room = Room::find($id);
        $service = Services::all();
        return view('frontend.rooms.booking' , compact('room', 'service'));
    }
}
