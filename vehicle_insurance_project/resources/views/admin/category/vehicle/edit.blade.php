@extends('admin.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Information</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.vehicle.index') }}">Back</a>
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

    
    <form action="{{ route('admin.vehicle.update',['id'=>$vehicle->vehicletype_id]) }}" method="POST">
        @csrf
        <div class="row">
            <div class="control-group col-sm-6">
                <div class="form-group">
                    <label for="type">Vehicle Type:</label>
                    <input type="text" id="value" class="form-control" name="type" value="{{old('type',$vehicle->vehicletype_id)}}" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <br>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>

@endsection