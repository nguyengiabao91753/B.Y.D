@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1 class="bd"><b>Edit Account</b></h1><br>

                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.accounts.index') }}">Back</a>
                </div>
        </div>
    </div>
    <form action="{{ route('admin.accounts.update',['id'=>$account->account_id])}}" method="POTS">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>CustomerID :</strong><br>
                    <input type="text" name="account_id" value="{{ old('account_id',$account->account_id)}}"class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>User :</strong><br>
                    <input type="text" name="user" value="{{ old('user',$account->user)}}"class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div style="width:700px">
                    <strong>Password :</strong><br>
                    <input type="text" name="password" value="{{old('password',$account->password)}}"class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" action="{{route('admin.accounts.index')}}">Submit</button>
            </div>
        </div>
    </form>
@endsection