@extends('admin.master')

@section('module', 'Car Value')
@section('action', 'Edit')

@section('content')
<form method="post" action="{{ route('admin.vehicle.carpkr.update',['id'=>$carpkr->id]) }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Car Value edit</h3>

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
                <label for="car_pkr">Current Value(PKR)</label>
                <input type="text" class="form-control" placeholder="Enter Car Brand" name="car_pkr" value="{{old('car_pkr',$carpkr->car_pkr)}}" required>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection
