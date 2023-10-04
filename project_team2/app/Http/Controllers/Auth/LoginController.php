<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function showLogin() {
        // if(Auth::check()){
        //     return redirect()->back();
        // }
        return view('auth.login');
    }

    public function login (LoginRequest $request) {
        $credentials=[
            'email'=>$request->email,
            'password'=>$request->password,
            'level'=>[1,2]
        ];

        if (Auth::guard('web')->attempt($credentials)){
            return redirect()->route('admin.category.index');
        }

        return redirect()->back();
    }
}
