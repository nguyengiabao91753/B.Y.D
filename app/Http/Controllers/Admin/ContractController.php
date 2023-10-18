<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\Contract\StoreRequest;
use App\Http\Requests\Admin\Contract\UpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin\Insurance;
use App\Models\Contract;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function League\Flysystem\delete;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contracts = Contract::with('customer','insurance')->orderBy('created_at','DESC')->get();
        return view('admin.modules.contract.index',[
            'contracts'=>$contracts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $customers = Customer::all();
        $insurances = Insurance::all();
        return view('admin.modules.contract.create',[
            'customers'=>$customers,
            'insurances'=>$insurances
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $contract = new Contract();
        $contract->insurance_id=$request->insurance_id;
        $contract->customer_id = Auth::user()->id;
        $contract->insurance_id = $request->insurance_id; 
        $contract->startdate = $request->startdate;
        $contract->enddate = $request->enddate;
        $contract->price = $request->price;
        $contract->save();
        return redirect()->route('admin.contract.index')->with('success','success');
    }
    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $contract = Contract::find($id);
        $customers = $contract->customers;
        $insurances = Insurance::find($id);
        return view('admin.modules.contract.show',[
            'id'=>$id,
            'contract'=>$contract,
            'customer'=>$customers,
            'insurance'=>$insurances
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $contract = Contract::find($id);
        $customer = Customer::all();
        $insurance = Insurance::all();
        return view('admin.modules.contract.edit',[
            'contract'=>$contract,
            'customers'=>$customer,
            'insurances'=>$insurance
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        $contract = Contract::find($id);
        if($contract == null){
            abort(404);

        }
        $contract->insurance_id=$request->insurance_id;
        $contract->customer_id = Auth::user()->id;
        $contract->startdate = $request->startdate;          
        $contract->enddate = $request->enddate;
        $contract->price = $request->price;
        $contract->save();
        return redirect()->route('admin.contract.index')->with('success','success');
    }
        //
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $contract= Contract::find($id);
        $contract->delete();
        return redirect()->route('admin.contract.index')->with('success', 'Deleted Successfully!');
    }
}
