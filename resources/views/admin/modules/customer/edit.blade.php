@extends('admin.master')

@section('module', 'Customer')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.customer.update',[ 'id'=>$id ]) }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Customer create</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" placeholder="Enter first name" name="firstname" value="{{ old('firstname',$customer->firstname)}}">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password" value="{{ old('password',$customer->password)}}">
                    </div>
                </div>  

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" placeholder="last name" name="lastname" value="{{ old('lastname',$customer->lastname)}}">
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password_confirmation">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Level</label>
                    <select class="form-control" name="level">
                        <option value="1" {{old('level',$customer->level)==1 ? 'selected': ''}}>Admin</option>
                        <option value="2" {{old('level',$customer->level)==2 ? 'selected' : ''}}>Member</option>
                    </select>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email" value="{{ old('email',$customer->email)}}">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter phone" name="phone" value="{{ old('phone',$customer->phone)}}">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection