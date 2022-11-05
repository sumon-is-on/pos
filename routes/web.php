<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\UserController;
use Illuminate\Support\Facades\Route;

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
Route::controller(AuthController::class)->group(function(){
    Route::get('/','login')->name('admin.login');
    Route::post('/lohin','loginPost')->name('admin.loginPost');
    Route::get('/logout','logout')->name('admin.logout');
});
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
Route::resource('user',UserController::class);
Route::prefix('role')->controller(RoleController::class)->group(function(){
    Route::get('/','index')->name('admin.role.index');
    Route::get('/create','create')->name('admin.role.create');
    Route::post('/store','store')->name('admin.role.store');
    Route::get('/edit/{role_id}','edit')->name('admin.permission.edit');
    Route::put('/update/{role_id}','update')->name('admin.permission.update');
});
