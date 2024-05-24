<?php

use App\Http\Controllers\Desawisata;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\AuthController;

Route::get('/',function(){
   return view('home',[
      'title'=>'home'
   ]);
});

Route::get('/login',[AuthController::class,'index']);

Route::post('/auth/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->get('/dashboard',function(){
   // $response = Http::get('http://localhost:3000/akun')->collect();
   return view('dashboard.superadmin.index',[
      'title'=>'dashboard',
      // 'akun'=>$response
   ]);
});
Route::resource('/desawisata',Desawisata::class);