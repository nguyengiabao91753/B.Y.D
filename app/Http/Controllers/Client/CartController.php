<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Insurance;
use App\Models\Contract;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    // public function checkout(){
    //         return view('client.page.invoice_checkout');
    // }

    public function checkoutPost(){

        $customer = Auth::user();   
        $customer_id = $customer->id;
        $contract = Contract::with('insurance','customer')->select('id','customer_id','insurance_id','enddate')->where('customer_id',  $customer_id)->first();
        $contract_id = $contract->id;

        $insurance_id = $contract->insurance_id;

        $invoice = Invoice::with('contract')->select('id','contract_id','duedate')->where('contract_id',$contract_id)->first();
        $insurance = Insurance::with('policy')->select('price','rate','value','policy_id')->where('id',$insurance_id)->first();
        return view('client.page.invoice_checkout',[
            'invoice'=>$invoice,
            'customer'=>$customer,
            'insurance'=>$insurance,
            'contract'=>$contract
        ]);
    }
}
