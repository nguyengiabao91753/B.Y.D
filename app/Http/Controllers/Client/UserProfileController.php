<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Customer\UpdateRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    //
    public function show(){
        $customer=Auth::user();
        return view('client.page.user_profile',compact('customer'));
    }

    public function edit( int $id){
        $customer= Customer::findOrFail($id);
        return view('client.page.user_profile_update', [
            'id'=> $id,
            'customer'=> $customer,
        ]);
    }

    public function update(Request $request, int $id)
    {
        $customer= Customer::findOrFail($id);

        if(!empty($request->password)){
            $request->validate([
                'password'=>'required|confirmed|min:5',
            ],[
                'password.required'=>'Please enter password',
                'password.confirmed'=>'Password confirmation does not matach',
            ]);
            $customer->password=bcrypt($request->password);
        }


        $customer->save();

        return redirect()->route('home')->with('success', 'Profile updated successfully.');
    }

    public function showContract(){
        $customer=Auth::user();
        return view('client.page.contract_profile',compact('customer'));
    }
}