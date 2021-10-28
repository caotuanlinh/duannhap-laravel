<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $test = Room::all();
        return response()->json($test);
    }
}
