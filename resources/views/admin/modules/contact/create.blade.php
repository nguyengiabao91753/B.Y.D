@extends('admin.master')

@section('module', 'Contact')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.contact.store') }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contact Create</h3>

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
                        <input type="text" class="form-control" placeholder="Enter first name" name="firstname" value="{{ old('firstname')}}">
                    </div>
                </div>  

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" placeholder="last name" name="lastname" value="{{ old('lastname')}}">
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Enter Phone" name="phone">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" placeholder="Enter Description" name="description">
                    </div>
                </div>
                <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
            </div>
         
    <!-- /.card -->
</form>
@endsection