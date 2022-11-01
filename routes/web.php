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
Route::prefix('role')->controller(RoleController::class)->group(function(){
    Route::get('/index','index')->name('admin.role.index');
    Route::get('/create','create')->name('admin.role.create');
    Route::post('/store','store')->name('admin.role.store');
});