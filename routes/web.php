<?php

use App\Http\Controllers\Desawisata;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
   return view('auth.login');
});

Route::resource('/desawisata',Desawisata::class);