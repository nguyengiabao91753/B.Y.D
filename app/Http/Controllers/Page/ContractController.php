<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Customer;
use App\Models\Policy;
use App\Models\Admin\Insurance;
use App\Http\Requests\Admin\Contract\StoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $customers = Customer::all();
        $insurances = Insurance::all();
        return view('client.page.contract_user',[
            'customers'=>$customers,
            'insurances'=>$insurances
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        
        $contract = new Contract();
        $contract->insurance_id = $request->insurance_id;
        $contract->customer_id = Auth::user()->id;
        $newenddate = $request->input('enddate');
        $newstartdate= $request->input('startdate');
        $contract->startdate=$newstartdate;
        $contract->enddate = $newenddate ;
        $contract->save();
        return redirect()->route('invoice.create')->with('success','Create Contract successfully.Thank you for contacting us');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id){
        $customers=Auth::user();
        $insurances = Insurance::with('policy')->find($id);
        return view('client.page.contract_user',[
            'customers'=>$customers,
            'insurances'=>$insurances,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
