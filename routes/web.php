<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Backends\PermissionController;
use App\Http\Controllers\Backends\UserController;
use Illuminate\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::controller(RoleController::class)->group(function () {
        Route::get('/all_permission', 'AllRole')->name('role.index');
        Route::get('/add_permission', 'AddRole')->name('add_role');
        Route::post('/store_permission', 'StoreRole')->name('store_role');
        Route::get('/edit_role/{id}', 'EditRole')->name('edit_role');
        Route::put('/update_role/{id}', 'UpdateRole')->name('update_role');
        Route::delete('/delete/{id}', 'DestroyRole')->name('destroy_role');
    });
    //User
    Route::resource('user',UserController::class);
    Route::get('profile/edit/{id}',[UserController::class,'edit_profile'])->name('profile.edit');
    Route::put('profile/update/{id}',[UserController::class,'update_profile'])->name('profile.update');
});
