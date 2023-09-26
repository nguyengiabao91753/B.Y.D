@extends('admin.app')
@section('content')
    <div class="card">
        <div class="card-header">
                <h1>Account-Users</h1>
        </div>
    </div>
    <form action="{{ route('admin.account.store') }}" method="POST" >
        @csrf
        <div class="row">

            <div class="control-group col-sm-12">
                <div class="form-group">
                    <label for="LastName">CustomerID:</label>
                    <input type="text" id="customer_id" class="form-control" name="customer_id">
                </div>
            </div>
            
            <div class="control-group col-sm-12">
                <div class="form-group">
                    <label for="Email">User:</label>
                    <input type="text" id="user" class="form-control" name="user">
                </div>
            </div>
            <div class="control-group col-sm-12">
                <div class="form-group">
                    <label for="Phone">Password:</label>
                    <input type="text" id="password" class="form-control" name="password"
                        placeholder="Enter Phone" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <br>
                <button type="submit" class="btn btn-primary">Add Information</button>
            </div>
        </div>
    </form>

@endsection
