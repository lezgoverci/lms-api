<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request){
        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if(!Auth::attempt($login)){
            return response(['message' => 'failed login'], 422);
        }

        $user = Auth::user();
        $accessToken = $user->createToken('AuthToken')->accessToken;

        return response(['user' => Auth::user(), 'accessToken'=> $accessToken]);
    }
}
