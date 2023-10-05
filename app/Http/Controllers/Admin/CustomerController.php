<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Customer\StoreRequest;
use App\Http\Requests\Admin\Customer\UpdateRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customers = Customer::orderBy('created_at','DESC')->where('level','!=','3')->get();
        return view('admin.modules.customer.index',[
            'customers'=>$customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.modules.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $customer = new Customer();
        $customer->firstname=$request->firstname;
        $customer->lastname=$request->lastname;
        $customer->email=$request->email;
        $customer->phone=$request->phone;
        $customer->password=bcrypt($request->password);
        $customer->level=$request->level;
        $customer->save();
        
        return redirect()->route('admin.customer.index')->with('success','Create customer successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $customer= Customer::findOrFail($id);

        $edit_myself = null;
        if(Auth::user()->id == $id){
            $edit_myself = true;
        } else {
            $edit_myself = false;
        }
        
        if(Auth::user()->id != 1 && ($id == 1 || ( $customer["level"] == 1 && $edit_myself ==  false))){
            return redirect()->route('admin.customer.index')->with('error','You do not have permission to edit this user.');
        }

        return view('admin.modules.customer.edit',[
            'id'=> $id,
            'customer'=> $customer,
            'myself'=> $edit_myself
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $customer= Customer::findOrFail($id);

        $customer->firstname=$request->firstname;
        $customer->lastname=$request->lastname;
        $customer->email=$request->email;
        $customer->phone=$request->phone;

        if(!empty($request->password)){
            $request->validate([
                'password'=>'required|confirmed|min:5',
            ],[
                'password.required'=>'Please enter password',
                'password.confirmed'=>'Password confirmation does not matach',
            ]);
            $customer->password=bcrypt($request->password);
        }


        $customer->level=$request->level;
        $customer->save();

        return redirect()->route('admin.customer.index')->with('success','Update customer successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //

        $customer = Customer::findOrFail($id);

        if( $id ==1 || (Auth::user()->id != 1 && $customer["level"] == 1)){
            return redirect()->route('admin.customer.index')->with('error','You don not have permission to delete this user.');
        }
        $customer->level = 3 ;
        $customer->save();

        return redirect()->route('admin.customer.index')->with('success','Delete customer successfully.');
    }
}
