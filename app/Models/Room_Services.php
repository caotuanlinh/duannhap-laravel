<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_Services extends Model
{
    use HasFactory;
    protected $table = 'flights_room_services';
    public $fillable = [
        'room_id', 'servi_id','additional_price','topping_id'
    ];

}
