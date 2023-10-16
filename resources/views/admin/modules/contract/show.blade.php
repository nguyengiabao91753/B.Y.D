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
                        <input type="text" class="form-control" placeholder="Enter first name" name="firstname" value="{{ old('email',$contract->$customer->email)}}">
                    </div>
                </div>  
        </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{ route('admin.contract.index') }}">Go Back</a>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection