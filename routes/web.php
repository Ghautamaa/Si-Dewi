<?php

use App\Http\Controllers\AdmindesaController;
use App\Http\Controllers\AkomodasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DesawisataController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KategoridestinasiController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SuperadminController;

// GUEST
Route::middleware('guest')->group(function(){
    Route::get('/', [GuestController::class,'homepage']);
    Route::get('/jelajahi', [GuestController::class,'filter'])->name('jelajahi.filter');
    // Route::get('/jelajahi/filter', [GuestController::class,'filter'])->name('jelajahi.filter');
    Route::prefix('/desa/{id_desa}')->group(function(){
        Route::get('/',[GuestController::class,'desa']);
        Route::get('/destinasi/{id_destinasi}',[GuestController::class,'destinasi']);
        Route::get('/paket/{id_paket}',[GuestController::class,'desa']);
        Route::get('/akomodasi/{id_akomodasi}',[GuestController::class,'desa']);
        Route::get('/produk/{id_produk}',[GuestController::class,'produk']);
    });
    Route::prefix('/artikel')->group(function(){
        Route::get('/',[GuestController::class,'filterberita'])->name('artikel.filter');
        // Route::get('/filter',[GuestController::class,'filterberita'])->name('artikel.filter');
        Route::get('/{id_artikel}',[GuestController::class,'beritaId']);
    });


    Route::get('/home',[DashboardController::class,'home']);
    // Route::prefix('/desa/{id_desa}')->group(function()  {
    //     Route::get('/',[DashboardController::class,'desacount']);

    //     Route::get('/destinasi/{id_destinasi}',[DashboardController::class,'destinasicount']);
    //     Route::get('/paket/{id_paket}',[DashboardController::class,'paketcount']);
    //     Route::get('/produk/{id_produk}',[DashboardController::class,'produkcount']);
    // });
    Route::get('/login',[AuthController::class,'login']);
    Route::post('/dologin',[AuthController::class,'dologin']);
    Route::delete('/logout',[AuthController::class,'logout']);
    Route::get('/profile',[AkunController::class,'profile']);
    Route::patch('/profile/update/{id}',[AkunController::class,'update']);
    Route::patch('/profile/password/{id}',[AkunController::class,'password']);
});





// ADMIN
Route::prefix('/admin')->middleware('role:ADMIN')->group(function(){
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
Route::get('/admin/event', function () {
    return view('admin/crud_event');
});

// SUPERADMIN
Route::prefix('/superadmin')->middleware(['role:SUPERADMIN'])->group(function(){
    Route::get('/dashboard',[SuperadminController::class,'index']);
    Route::resource('/akun', AkunController::class);
    Route::resource('/desa', DesawisataController::class)->only(['index','create','destroy','store']);
    Route::resource('/admindesa', AdmindesaController::class);
    Route::resource('/kategoridestinasi', KategoridestinasiController::class);

});
