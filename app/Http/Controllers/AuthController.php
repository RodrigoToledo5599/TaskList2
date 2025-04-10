<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class AuthController extends Controller
{
    public function Login(Request $request){
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('MyAppToken')->accessToken;
            return redirect('/home');
        }
        else return "nao foi possivel encontrar o usuario";   
    }
}
