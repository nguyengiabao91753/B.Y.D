<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\Contract\StoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Contract;
use Illuminate\Http\Request;
use function League\Flysystem\delete;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contract= Contract::all();
        return view('admin.contract.index',compact('contract'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.contract.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        $contract = new Contract();

        // $contract->contract_id = $request->contract_id;
        // $contract->policy_id = $request->policy_id;
        $contract->enddate = $request->enddate;
        $contract->save();
        return redirect()->route('admin.contract.index')->with('success','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        //
        return view('admin.account.show',compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        //
        $contracs = Contract::find($id);
        return view('admin.contract.edit',['contract'=>$contract]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //
        $contract = Contract::find($id);
        $contract->account_id = $request->account_id;
        $contract->policy_id = $request->account_id;
        $contract->enddate = $request->enddate;
        $contract->save();
        return redirect()->route('admin.contract.index')->with('success','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        $contract = Contract::find($id);
        $contract -> delete();
        return redirect()->route('admin.contract.index')->with('success','success');
    }
}
