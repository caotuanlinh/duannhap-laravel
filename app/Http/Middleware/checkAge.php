<?php

namespace App\Http\Middleware;

use App\Models\Room;
use Closure;
use Illuminate\Http\Request;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $id)
    {
        // $abc = Room::find($id);
        // // if($request->age > 18){
        // //     return $next($request);
        // // }

        // // return redirect(route('login'));
        // if ($request->abc == 45 ) {
        //     return $next($request);
        // }
        // return redirect(route('login'));
    }
}
