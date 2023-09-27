@extends('admin.app')
@section('content')
    @if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>These were some problems with your input. <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('admin.payment.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div><h1>Add a Payment</h1></div><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>Payment Name :</strong><br>
                    <input type="text" name="paymentname" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary" action="{{route('admin.payment.index')}}">Add Payment</button>
            </div>
        </div>
    </form>