@extends('admin.master')

@section('module', 'Contract')
@section('action', 'Show')

@section('content')
<form method="post" action="{{ route('admin.contract.show', ['id'=>$id])}}">
    @csrf
    <!-- Default box -->
    <div class="card-body">
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" name="firstname"  placeholder="{{ old('firstname',$contract->customer->firstname)}}">
                    </div>
                </div>  

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" name="lastname"  placeholder="{{ old('lastname',$contract->customer->lastname)}}">
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email"  placeholder="{{ old('email',$contract->customer->email)}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone"  placeholder="{{ old('phone',$contract->customer->phone)}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Insurance Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="{{ old('name',$contract->insurance->policy->name)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Brand</label>
                        <input type="text" class="form-control" name="brand"  placeholder="{{ old('brand',$contract->insurance->brand)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" class="form-control" name="model"  placeholder="{{ old('model',$contract->insurance->model)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Value</label>
                        <input type="text" class="form-control" name="value"  placeholder="{{ old('value',$contract->insurance->value)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price (USD)</label>
                        <input type="text" class="form-control" name="price"  placeholder="{{ old('price',$contract->insurance->price)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>StartDate</label>
                        <input type="text" class="form-control" name="startdate"  placeholder="{{ old('startdate',$contract->startdate)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>EndDatend</label>
                        <input type="text" class="form-control" name="enddate"  placeholder="{{ old('enddate',$contract->enddate)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Payment fee(USD)</label>
                        <input type="text" class="form-control" name="price"  placeholder="{{ old('price',$contract->price)}}">
                    </div>
                </div>
            </div>
        <div style="text-align: right;">
            <a class="btn btn-primary" href="{{ route('admin.contract.index') }}">Go Back</a>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection