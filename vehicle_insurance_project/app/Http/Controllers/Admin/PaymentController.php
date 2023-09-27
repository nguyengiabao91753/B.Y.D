<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\Payment\StoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use function League\Flysystem\delete;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $payment = Payment::all();
        return view('admin.payment.index',compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.payment.create');
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
        $payment = new payment();
        $payment->paymentname = $request->paymentname;
        $payment->save();
        return redirect()->route('admin.payment.index')->with('success','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
        return view('admin.payment.show',compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $payment = Payment::find($id);
        return view('admin.payment.edit',[
            'payment'=>$payment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $payment = Payment::find($id);
        $payment->paymentname = $request->paymentname;
        $payment->save();
        return redirect()->route('admin.payment.index')->with('success','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $payment = Payment::find($id);
        $payment -> delete();
        return redirect()->route('admin.payment.index')->with('success','success');
    }
}
