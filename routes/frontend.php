<?php

use App\Http\Controllers\Frontend\Fr_LoginController;
use App\Http\Controllers\Frontend\Fr_ResisterController;
use App\Http\Controllers\Frontend\Room_Front_Controller;
use Illuminate\Support\Facades\Route;

Route::get('index', [Room_Front_Controller::class , 'index'])->name('front_room_list');
Route::prefix('room')->group(function () {
    Route::get('list', [Room_Front_Controller::class , 'listRoom'])->name('listRoom');
    Route::get('detail/{id}', [Room_Front_Controller::class , 'Detail_room'])->name('Detail_Room');
    Route::get('booking/{id}',[Room_Front_Controller::class,'Booking'])->name('booking_room');
});
// đăng nhập
Route::get('login', [Fr_LoginController::class, 'login'])->name('login_frontend');
Route::post('login', [Fr_LoginController::class, 'postlogin']);
// đăng ký
Route::get('register', [Fr_ResisterController::class,'getRegis'])->name('register_Fr');
Route::post('register', [Fr_ResisterController::class,'postRegis']);
?>