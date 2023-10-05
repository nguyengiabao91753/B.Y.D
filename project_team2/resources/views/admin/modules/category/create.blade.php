@extends('admin.master')

@section('module', 'Category')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.category.store') }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category create</h3>

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
                <label for="">Categories parent</label>
                <select name="parent_id" id="">
                    <option value="0">----Root----</option>
                    @php 
                        recursiveCategory($categories);
                    @endphp
                </select>
            </div>
            <div class="form-group">
                <label>Category name</label>
                <input type="text" class="form-control" placeholder="Enter category name" name="name" value="{{old('name')}}">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection
