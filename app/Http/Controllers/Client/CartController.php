<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart(){

    }

    public function checkout(int $id){

        $invoice = Invoice::FindOrFail($id);

        if($invoice ==null){
            abort(404);
        }
        $customer = Customer::with('contract','insurance')->select('firstname','lastname','insurance_id','enddate','price')->where('id',$id)->get();
        return view('client.page.invoice_checkout',[
            'id'=>$id,
            'invoice'=>$invoice,
            'customer'=>$customer
        ]);
    }
}
