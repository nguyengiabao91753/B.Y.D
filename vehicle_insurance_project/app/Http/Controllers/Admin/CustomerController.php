<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Customer\StoreRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    
    public function index()
    {
        //
        {
            //
            $customers=Customer::all();
            return view('admin.customer.index',compact('customers'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        //
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    public function store(StoreRequest $request)
    {
        //
        $customer = new Customer();
        $customer->FirstName = $request->FirstName;
        $customer->LastName = $request->LastName;
        $customer->Email = $request->Email;
        $customer->Phone = $request->Phone;
        $customer->Address= $request->Address;
        $customer->save();

        return redirect()->route('admin.customer.index')->with('success', 'Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * 
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     */
    public function edit($id)
    {
        $customer= Customer::Find($id);
        return view('admin.customer.edit', [
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        //
        $customer = Customer::find($id);    
        
        $customer->FirstName = $request->FirstName;
        $customer->LastName = $request->LastName;
        $customer->Email = $request->Email;
        $customer->Phone = $request->Phone;
        $customer->Address= $request->Address;
        return redirect()->route('admin.customer.index')->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     */
    public function destroy( $id)
    {

        $customer= Customer::find($id);
        $customer->delete();

        return redirect()->route('admin.customer.index')->with('success', 'Deleted Successfully!');
    }
}
