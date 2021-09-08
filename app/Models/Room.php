<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'flights_rooms';
    public $fillable = [
        'room_no', 'price', 'floor', 'detail','image'
    ];
    
    public function service(){
        return $this->belongsToMany(Services::class,'flights_room_services','room_id', 'servi_id');
    }
}
