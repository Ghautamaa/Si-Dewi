<?php

use Illuminate\Support\Facades\Route;


// Route Admin
// Route::get('/', function () {
//     return view('admin/dashboard');
// });

// guest
Route::get('/', function () {
    return view('./guest/welcome');
});

Route::get('/artikel', function () {
    return view('guest/artikel2');
});
Route::get('/detail', function () {
    return view('guest/detailDesa');
});

Route::get('/event', function () {
    return view('guest/event');
});
// Route::get('/event/list', [EventController::class, 'listEvent'])->name('events.list');

Route::get('/map', function () {
    return view('guest/map');
});

Route::get('/jelajahi', function () {
    return view('guest/explore');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/Admin/ProfilDesa', function () {
    return view('admin/crud_profil_desa');
});


Route::get('/Admin/Berita', function () {
    return view('admin/crud_berita');
});
Route::get('/Admin/Rating', function () {
    return view('admin/crud_rating');
});
Route::get('/Admin/Destinasi', function () {
    return view('admin/crud_destinasi_wisata');
});
Route::get('/Admin/Akomodasi', function () {
    return view('admin/crud_akomodasi');
});
Route::get('/Admin/Produk', function () {
    return view('admin/crud_produk');
});
Route::get('/Admin/Event', function () {
    return view('admin/crud_event');
});
Route::get('/Admin/PaketWisata', function () {
    return view('admin/crud_paket_wisata');
});
Route::get('/admin/event', function () {
    return view('admin/crud_event');
});




?>
