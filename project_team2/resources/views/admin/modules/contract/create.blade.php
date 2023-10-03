@extends('admin.master')

@section('module', 'Contract')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.contract.store') }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contract Create</h3>

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
            <div class="form-group">
                <div class="col-md-6">
                    <label>Customer ID</label>
                        <select class="form-control" name="customer_id">
                            <option value="0" {{old( 'custormer_id' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}" {{old( 'custormer_id' ) == $customer->id ? 'selected' : '' }}>{{$customer-> email}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label>Insurance ID</label>
                        <select class="form-control" name="insurance_id">
                            <option value="0" {{old( 'insurance_id' ) == 0 ? 'selected' : '' }}>----- Root -----</option>
                            @foreach($insurances as $insurance)
                            <option value="{{$insurance->id}}" {{old( 'insurance_id' ) == $insurance->id ? 'selected' : '' }}>{{$insurance->id}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="form-group">
            <div class="col-md-6">
                    <label for="enddate" >EndDate</label>
                    <input type="date" id="duedate" class="form-control" name="enddate" min="2018-09-24" max="2025-10-20"
                            placeholder="Enter Date" value="{{ old('duedate')}}">
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection