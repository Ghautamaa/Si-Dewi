<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login',[
            'title'=>'Login'
        ]);
    }
    public function dologin(Request $request) {
        $response = Http::post('http://localhost:3000/login',$request);

        if($response->successful()){
            return redirect('/')->with('message','berhasil login');
        }elseif ($response->failed()) {
            return redirect('/')->with('message','gagal login');
        } else {
            return redirect('/')->with('message','erorr system 500');
        }
    }

    public function logout() {
        
    }
}
