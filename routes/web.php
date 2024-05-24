<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DesawisataController;
use Illuminate\Support\Facades\Route;

//AUTH
Route::get('/login',[AuthController::class,'login']);
Route::post('/dologin',[AuthController::class,'dologin']);


Route::get('/',function(){
   return view('index',[
    'title'=>'home'
   ]);
});

//DESAWISATA
Route::resource('/desawisata',DesawisataController::class);