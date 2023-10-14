@extends('admin.master')

@section('module', 'Category')
@section('action', 'Edit')

@section('content')
<form method="post" action="{{ route('admin.category.update', ['id' =>$category->id]) }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category update</h3>

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
                @php

                
                    $parent_category = DB::table('categories') -> select('id','parent_id','name')->where('id', $category->parent_id)->first();
                    echo $parent_category -> id;
                
                @endphp
                <label for="">Categories parent</label>
                <select name="parent_id" id="">
                    <option value="0">----Root----</option>
                    @php
                    recursiveCategory($categories, old('parent_id', $category->parent_id));
                    @endphp
                </select>
            </div>
            <div class="form-group">
                <label>Category name</label>
                <input type="text" class="form-control" placeholder="Enter category name" name="name" value="{{old('name',$category->name)}}">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection