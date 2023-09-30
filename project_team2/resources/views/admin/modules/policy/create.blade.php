@extends('admin.master')

@section('module', 'Policy')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.policy.store') }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Policy create</h3>

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
                <label for="name">Policy Name</label>
                <input type="text" class="form-control" placeholder="Enter Policy name" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" placeholder="Enter Policy Description" name="description"  id="" cols="30" rows="10" value="{{old('description')}}"></textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="Enter price" name="price" value="{{old('price')}}">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection
