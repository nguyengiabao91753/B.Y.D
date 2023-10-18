<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Invoice\StoreRequest;
use App\Models\Admin\Insurance;
use App\Models\Contract;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    


    public function create()
    {
        //
        $contracts =Contract::all();
        return view('client.page.form_invoice',[
            'contracts'=>$contracts
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
  
        $invoice = new Invoice();
        $invoice->contract_id= $request->contract_id;
        $invoice ->duedate = $request->duedate;


        $invoice->save();
        return redirect()->route('checkoutPost')->with('success','Create Successfully!');
    }

    public function checkoutPost(){

        $customer = Auth::user();   
        // $customer_id = $customer->id;
        $contract = Contract::with('insurance','customer')->select('id','customer_id','insurance_id','enddate')->where('customer_id',  $customer->id)->first();
        // $contract_id = $contract->id;

        // $insurance_id = $contract->insurance_id;

        $invoice = Invoice::with('contract')->select('id','contract_id','duedate')->where('contract_id',$contract->id)->first();
        $insurance = Insurance::with('policy')->select('price','rate','value','policy_id')->where('id',$contract->insurance_id)->first();
        return view('client.page.invoice_checkout',[
            'invoice'=>$invoice,
            'customer'=>$customer,
            'insurance'=>$insurance,
            'contract'=>$contract
        ]);
    }

    public function showCheckoutPost(int $id){
        $customer = Auth::user();  
        $contract = Contract::with('insurance','customer')->select('id','customer_id','insurance_id','enddate')->where('customer_id',  $id)->first();
        $insurance_id = $contract->insurance_id;
        $contract_id = $contract->id;
        $insurance = Insurance::with('policy','provider')->select('price','rate','value','policy_id','provider_id')->find($insurance_id)->first();
        $invoice = Invoice::with('contract')->where('contract_id',$contract_id)->first();
        return view('client.page.invoice_checkout_show',[
            'invoice'=>$invoice,
            'customer'=>$customer,
            'insurance'=>$insurance,
            'contract'=>$contract
        ]);

    }

}
