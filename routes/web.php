<?php

use App\Http\Controllers\AdmindesaController;
use App\Http\Controllers\AkomodasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DesawisataController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KategoridestinasiController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProdukController;

// GUEST
Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/login',[AuthController::class,'login']);
    Route::post('/dologin',[AuthController::class,'dologin']);
    Route::delete('/logout',[AuthController::class,'logout']);
    Route::get('/profile',[AkunController::class,'profile']);
    Route::patch('/profile/update/{id}',[AkunController::class,'update']);
    Route::patch('/profile/password/{id}',[AkunController::class,'password']);
});


  


// ADMIN
Route::prefix('/admin')->middleware('ADMIN')->group(function(){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    });    
    Route::resource('/profil-desa',DesawisataController::class)->only(['show','edit','update']);
    Route::resource('/berita', BeritaController::class);
    Route::resource('/destinasi', DestinasiController::class);
    Route::resource('/akomodasi', AkomodasiController::class);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/paket', PaketController::class);
    Route::resource('/review', ReviewController::class);
    Route::resource('/informasi', InformasiController::class);
    Route::get('/fasilitas/{id_destinasiwisata}/create',[FasilitasController::class,'create']);
    Route::resource('/fasilitas', FasilitasController::class);


});

// SUPERADMIN
Route::prefix('/superadmin')->middleware('SUPERADMIN')->group(function(){
    Route::get('/dashboard', function(){
        return view('superadmin.dashboard');
    });
    Route::resource('/akun', AkunController::class);
    Route::resource('/desa', DesawisataController::class)->only(['index','create','destroy','store']);
    Route::resource('/admindesa', AdmindesaController::class);
    Route::resource('/kategoridestinasi', KategoridestinasiController::class);
    
});