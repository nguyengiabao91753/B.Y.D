@extends('admin.master')

@section('module', 'Contact')
@section('action', 'Show')

@section('content')
<form method="post" action="{{ route('admin.contact.show', ['id'=>$id])}}">
    @csrf
    <!-- Default box -->
    <div class="card-body">
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" placeholder="Enter first name" name="firstname" value="{{ old('firstname',$contact->firstname)}}">
                    </div>
                </div>  

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" placeholder="last name" name="lastname" value="{{ old('lastname',$contact->lastname)}}">
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email',$contact->email)}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="phone" value="{{ old('phone',$contact->phone)}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="10" type="text" class="form-control" name="description" >{{$contact->description}}</textarea>
                    </div>
                </div>
            </div>
        <div class="card-footer">
            <a class="btn btn-primary" href="{{ route('admin.contact.index') }}">Go Back</a>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection