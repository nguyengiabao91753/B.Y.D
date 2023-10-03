
@extends('admin.account.layout')
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
    <form action="{{route('admin.account.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div><h1>Add a Account</h1></div><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width: 700px;">
                    <strong>CustomerID:</strong><br>
                    <input type="text" name="customer_id" class="form-control">
                <div style="width:700px">
                    <strong>User :</strong><br>
                    <input type="text" name="user"class="form-control">
                </div>
                <div style="width:700px">
                    <strong>Password :</strong><br>
                    <input type="text" name="password" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary" action="{{route('admin.account.index')}}">Add Account</button>
            </div>
        </div>
    </form>
@endsection
