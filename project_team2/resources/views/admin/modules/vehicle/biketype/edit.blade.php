@extends('admin.master')

@section('module', 'Motobike Brand')
@section('action', 'Edit')

@section('content')
<form method="post" action="{{ route('admin.vehicle.biketype.update',['id'=>$biketype->id]) }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Motobike brand Edit</h3>

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
                <label for="bike_type">Brand</label>
                <input type="text" class="form-control" placeholder="Enter Motobike Brand" name="bike_type" value="{{old('bike_type',$biketype->bike_type)}}" required>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection
