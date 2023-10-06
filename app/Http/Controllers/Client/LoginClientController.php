<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\LoginClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginClientController extends Controller
{
    //
    public function showLoginClient() {
        if(Auth::check()){
            return redirect()->back();
        }
        return view('client.page.login');
    }

    public function loginClient (LoginClientRequest $request) {
        $credentials=[
            'email'=>$request->email_client,
            'password'=>$request->password_client,
        ];

        if (Auth::guard('web')->attempt($credentials)){
            return redirect()->route('home');
        }

        return redirect()->back();
    }
}
