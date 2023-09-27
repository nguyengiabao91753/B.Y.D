@extends('admin.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Vehicle Type Information</h2>
        </div>

    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>These were some problems with your input. <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('admin.vehicle.store') }}" method="POST" >
    @csrf
    <div class="row">
        <div class="control-group col-sm-6">
            <div class="form-group">
                <label for="typename" style="width: fit-content;" class="form-control">Vehicle Type:</label>
                <input type="text" id="typename" class="form-control" name="typename" placeholder="Enter Vehicle Type">
            </div>
        </div>
    </div>
    <div  style="width: 10%; float:right">
        <button type="submit" class="btn btn-primary">Add</button>
        </div>
</form>

@endsection