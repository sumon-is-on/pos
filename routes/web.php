<?php

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
Route::get('/',[DashboardController::class,'dashboard'])->name('admin.dashboard');
Route::resource('user',UserController::class);
Route::controller(RoleController::class)->group(function(){
    Route::get('/role/index','index')->name('admin.role.index');
    Route::get('/role/create','create')->name('admin.role.create');
});