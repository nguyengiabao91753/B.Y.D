@extends('admin.master')

@section('module', 'Policy')
@section('action', 'Edit')

@section('content')
<form method="post" action="{{ route('admin.policy.update',['id'=>$policy->id]) }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Policy Update</h3>

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
                <input type="text" class="form-control" placeholder="Enter Policy name" name="name" value="{{old('name',$policy->name)}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control"  name="description"   cols="30" rows="10"  required> {{old('description',$policy->description)}}</textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="Enter price" name="price" value="{{old('price',$policy->price)}}">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection
