<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Services extends Model
{
    use HasFactory;
    protected $table = 'flights_services';
    public $fillable = [
        'name', 'icon'
    ];
    public function rooms(){
        return $this->belongsToMany(Services::class,'flights_room_services','servi_id','room_id');
    }
}
