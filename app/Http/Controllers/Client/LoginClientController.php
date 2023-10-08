<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Customer\StoreRequest;
use App\Http\Requests\Client\LoginClientRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            return redirect()->intended(route('home'));
        }

        return redirect()->route('showLoginClient')->with("error","Login details are not valid");
    }

    public function registration(){
        return view('client.page.register');
    }

    public function register(StoreRequest $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required'
        ]);

        $data['firstname']=$request->firstname;
        $data['lastname']=$request->lastname;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['password']=Hash::make($request->password);
        $customer = Customer::create($data);
        if(!$customer){
            return redirect(route('registration'))->with('error','Registration failed,try again');
        }
        return redirect()->route('showLoginClient')->with('success','Login details to access the web');
    }

}
