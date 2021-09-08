<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetpassController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('demo', function () {
//     $prd = DB::table('flights_rooms')
// });

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('index', [UserController::class, 'index'])->name('user.index');
        // Route::get('tao-moi', [RoomsController::class, 'addForm'])->name('user.add');
        // Route::post('tao-moi', [RoomsController::class, 'saveAdd']);
    });


    Route::prefix('room')->group(function () {
        // Route::view('demo', 'admin.rooms.index');

        // Route::middleware('permission:remove product')->group(function () {
        //     Route::get('xoa/{id}', [RoomsController::class, 'remove'])->name('room.remove');
        // });
        Route::get('index', [RoomsController::class, 'index'])->name('room.index');
        Route::group(['middleware' => ['role:admin']], function () {
            Route::get('xoa/{id}', [RoomsController::class, 'remove'])->name('room.remove');
            Route::get('edit/{id}', [RoomsController::class, 'editForm'])->name('room.edit');
            Route::post('edit/{id}', [RoomsController::class, 'saveEdit']);
            Route::get('tao-moi', [RoomsController::class, 'addForm'])->name('room.add');
            Route::post('tao-moi', [RoomsController::class, 'saveAdd']);
        });
    });
    Route::prefix('service')->group(function () {
        // Route::view('demo', 'admin.rooms.index');
        Route::get('index', [ServicesController::class, 'index'])->name('servi.index');
        Route::group(['middleware' => ['role:admin']], function () {
            Route::get('xoa/{id}', [ServicesController::class, 'remove'])->name('servi.remove');
            Route::get('edit/{id}', [ServicesController::class, 'editForm'])->name('servi.edit');
            Route::post('edit/{id}', [ServicesController::class, 'saveEdit']);
            Route::get('tao-moi', [ServicesController::class, 'Form_Add'])->name('servi.add');
            Route::post('tao-moi', [ServicesController::class, 'saveAdd']);
        });
    });
});
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'Postlogin']);
Route::any('logout', function () {
    Auth::logout();
    return redirect(route('login'));
})->name('logout');
Route::get('reset', [ResetpassController::class, 'reset'])->name('reset');
Route::post('reset', [ResetpassController::class, 'SaveReset']);
Route::prefix('customer')->group(function () {
       Route::get('login', );
});

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

Route::get('config/prepare-role-n-permission', function () {
    Role::create(['name' => 'admin']);
    Role::create(['name' => 'editor']);
    Role::create(['name' => 'moderator']);

    Permission::create(['name' => 'add ']);
    Permission::create(['name' => 'edit']);
    Permission::create(['name' => 'remove']);

    $adminRole = Role::find(1);
    $editorRole = Role::find(2);
    $modRole = Role::find(3);

    $addProPer = Permission::find(1);
    $editProPer = Permission::find(2);
    $removeProPer = Permission::find(3);

    $adminRole->givePermissionTo($addProPer);
    $adminRole->givePermissionTo($editProPer);
    $adminRole->givePermissionTo($removeProPer);

    $editorRole->givePermissionTo($editProPer);

    // $editorRole->givePermissionTo($addProPer);
    // $modRole->givePermissionTo($removeProPer);

    // tài khoản id = 2 là tài khoản quản trị tối cao
    $adminAcc = User::find(1);
    $adminAcc->assignRole('admin');

    $EditAcc = User::find(2);
    $EditAcc->assignRole('editor');
    // tài khoản id = 1 là tài khoản của moderator
    // $modAcc = User::find(10);
    // $modAcc->assignRole('moderator');

    return "done";
});
