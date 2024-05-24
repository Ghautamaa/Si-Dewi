<?php

use App\Http\Controllers\DesawisataController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
   return view('auth.login');
});

Route::resource('/desawisata',DesawisataController::class);