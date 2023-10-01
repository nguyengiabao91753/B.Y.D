@extends('admin.master')

@section('module', 'Car Manufacturing Year')
@section('action', 'Edit')

@section('content')
<form method="post" action="{{ route('admin.vehicle.carmanu.update',['id'=>$carmanu->id]) }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Manufacturing Year Edit</h3>

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
                <label for="car_manufacture">Manufacturing Year</label>
                <input type="text" class="form-control" placeholder="Enter Car Brand" name="car_manufacture" value="{{old('car_manufacture',$carmanu->car_manufacture)}}" required>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection
