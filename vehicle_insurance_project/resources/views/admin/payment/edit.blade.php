@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="bd"><b>Edit Payment</b></h1><br>

                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.payment.index') }}">Back</a>
                </div>
        </div>
    </div>
    <form action="{{ route('admin.payment.update',['id'=>$payment->payment_id])}}" method="POTS">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>Payment ID :</strong><br>
                    <input type="text" name="payment_id" value="{{ old('payment_id',$account->payment_id)}}"class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>Payment Name:</strong><br>
                    <input type="text" name="paymentname" value="{{ old('paymentname',$payment->paymentname)}}"class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" action="{{route('admin.payment.index')}}">Submit</button>
            </div>
        </div>
    </form>
@endsection