<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\Akun;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckRole
{
    public function handle(Request $request, Closure $next,$role='USER')

    {
        $api_token = Session::get('accessToken');
        
        if(!$api_token){
            return redirect('/login');
        }

        $explode = explode('.',$api_token);
        $decode = base64_decode($explode[1]);
        $userdata = json_decode($decode);
        
        // jika role ada di token
        // if(!$userdata && $userdata['role']!==$role){
        //     return redirect('/login');
        // }

        $user = Akun::getById($userdata->id);
        if (!$user && $user['role'] !== $role) {
            return redirect('/login');
        }

        Session::put([
            'id'=>$user['id'],
            'nama'=>$user['nama'],
            'email'=>$user['email'],
            'foto'=>$user['foto'],
            'role'=>$user['role'],
            'no_telp'=>$user['no_telp'],
        ]);

        return $next($request);
    }
}

