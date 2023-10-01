<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Invoice\StoreRequest;
use App\Http\Requests\Admin\Invoice\UpdateRequest;
use App\Models\Contract;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $invoice = Invoice::with('contract')->orderBy('created_at','DESC')->get();
        return view('admin.modules.invoice.index',[
            'invoices'=>$invoice
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $contracts =Contract::get();
        return view('admin.modules.invoice.create',[
            'contracts'=>$contracts,
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $invoice = new Invoice();
        $invoice ->duedate = $request->duedate;

        $invoice->save();
        return redirect()->route('admin.invoice.index')->with('success','Create Successfully!');
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
        $contracts = Contract::get();

        $invoice = Invoice::find($id);
        if($invoice == null){
            abort(404);
        }

        return view('admin.modules.invoice.edit',[
            'id'=>$id,
            'contracts'=>$contracts,
            'invoice'=>$invoice
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
        $invoice =  Invoice::find($id);

        if($invoice ==null){
            abort(404);
        }

        $invoice ->duedate = $request->duedate;

        $invoice->save();

        return redirect()->route('admin.invoice.index')->with('success','Update Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $invoice = Invoice::find($id);
        if($invoice == null){
            abort(404);
        }

        $invoice->delete();
        return redirect()->route('admin.invoice.index')->with('success','Delete Successfully!');
    }
}
