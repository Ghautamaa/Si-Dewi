<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('./User/user_home');
});
