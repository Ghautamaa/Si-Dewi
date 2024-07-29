<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Cookie\SetCookie;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Tymon\JWTAuth\Contracts\Providers\JWT;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function dologin(Request $request)
    {

        $credentials = $request->only('email', 'password');
        // Misalkan kita menggunakan Auth untuk login dan mendapatkan token
        $client = new Client();
        
        $response = $client->request('POST',env('APP_API_URL') . '/akun/login', [
            'json' => $credentials,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);

        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $token = json_decode($body, true);
            Session::put('accessToken', $token);
            return redirect('/superadmin/dashboard')->with('success', 'Login successful.');
        } else {
            return redirect()->back()->with('error', 'Login failed.');
        }

    }

    public function logout(Request $request) {
    $accessToken = $request->session()->get('accessToken');

    // Make the API request to log out
    $response = Http::withToken($accessToken)
        ->delete(env('APP_API_URL') . '/akun/logout', [
            'accessToken' => $accessToken
        ]);

    // Check if the request was successful
    if ($response->successful()) {
        // Flush the session and redirect to the login page with a success message
        $request->session()->flush();
        return redirect('/login')->with('message', 'Berhasil logout');
    } elseif ($response->failed()) {
        // Redirect to the login page with a failure message
        return redirect('/login')->with('message', 'Gagal logout');
    }
}

}
