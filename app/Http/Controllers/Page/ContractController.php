<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contract;
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
        //
        // $record = new Contract;
        // $record->stardate = now(); // Đặt ngày đăng ký là ngày hiện tại
        // $record->enddate = now()->addYear(); // Tính ngày kết thúc là 1 năm sau ngày đăng ký
        // $record->save();
        return view('client.page.contract');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $contract = new Contract();
        $contract->insurance_id = $request->insurance_id;
        $contract->customer_id = Auth::user()->id;
        $contract->enddate = $request->enddate;
        $contract->stardate = now(); // Đặt ngày đăng ký là ngày hiện tại
        $contract->enddate = now()->addYear(); // Tính ngày kết thúc là 1 năm sau ngày đăng ký
        $contract->save();
        return redirect()->route('admin.contract.index')->with('success', 'success');
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
