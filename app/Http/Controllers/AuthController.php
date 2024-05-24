<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login',[
            'title'=>'login',
        ]);
    }

    public function login(Request $request) {
        $response = Http::post('http://localhost:3000/akun/login',$request);
        // dd($response);
        if($response->successful()){
            return redirect('/dashboard')->with('message','berhasil login');
        }elseif ($response->failed()) {
            return redirect('/dashboard')->with('message','gagal login');
        } else {
            return redirect('/dashboard')->with('message','erorr system 500');
        }

    }

    public function logout() {
        
    }
}
