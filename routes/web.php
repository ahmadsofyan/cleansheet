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
Route::post('/saveregis',[App\Http\Controllers\LoginController::class, 'saveregis'])->name('saveregis');
Route::post('/savedata',[App\Http\Controllers\TambahdataController::class, 'savedata'])->name('savedata');

Route::group(['middleware'=>['auth','cekrole:Admin']] ,function () {
    Route::get('DashboardAdmin', function () {
        return view('DashboardAdmin');
    
    });
    Route::get('/Regis', function () {
        return view('Registrasi');
    });
    Route::get('/edit', function () {
        return view('Edit');
    });
    
    Route::get('/Tambahdata', function () {
        return view('Tambahdata');
    });
    Route::get('/DashboardAdmin',[App\Http\Controllers\TampildataController::class, 'tampildata'])->name('tampildata');
   
    Route::get('/Tambahdata',[App\Http\Controllers\TambahdataController::class, 'ini'])->name('ini');
    Route::get('/edit',[App\Http\Controllers\TambahdataController::class, 'view'])->name('view');
    Route::get('/edit/{id}',[App\Http\Controllers\TambahdataController::class, 'update'])->name('update');
    Route::post('/edit/{id}',[App\Http\Controllers\TambahdataController::class, 'ubah'])->name('ubah');
    Route::get('/DashboardAdmin/{id}',[App\Http\Controllers\TampildataController::class, 'hapusdata'])->name('hapusdata');
    Route::get('/export',[App\Http\Controllers\TambahdataController::class, 'slipexport'])->name('slipexport');
    Route::get('/userexport',[App\Http\Controllers\TambahdataController::class, 'Userexport'])->name('Userexport');
});



    Route::get('/mitra', function () {
        return view('DashboardMitra');
     
});
Route::get('/mitra',[App\Http\Controllers\TampildataController::class, 'tampilmitra'])->name('tampilmitra');


