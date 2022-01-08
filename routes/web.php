<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginContoller;
use App\Http\Middleware\CekRole;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('pengguna.Login');
})->name('login');
Route::post('/postlogin',[App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::group(['middleware'=>['auth','cekrole:1,user']] ,function () {
  
    Route::get('/DashboardAdmin', function () {
    return view('DashboardAdmin');
});
Route::get('/DashboardAdmin',[App\Http\Controllers\AdminController::class, 'Admin'])->name('Admin');
Route::get('/DashboardMitra',[App\Http\Controllers\AdminController::class, 'Mitra'])->name('Mitra');
});