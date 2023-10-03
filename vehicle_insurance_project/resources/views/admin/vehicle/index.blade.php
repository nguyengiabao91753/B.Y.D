@extends('admin.app')

@section('content')
    <link rel="stylesheet" href="{{asset ('adminstrators/css/style.css')}}">
    <div class="card">
        <div class="card-header">
                <h1>Vehicle Type</h1>
        </div>
    </div>

    <div class="card-body">
    
     <table class="table table-borderd table-sm text-center" style="background-color:azure;">
        <tr>
           <th>Vehicle Type ID</th>
           <th>Type</th>
           <th>Actions</th>     
        </tr>
        @forelse($vehicles as $vehicle)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$vehicle->typename}}</td>
                <td>
                <a href="{{route('admin.vehicle.edit',['id'=>$vehicle->vehicletype_id] )}}" class="btn btn-success">Edit</a>
                <a href="{{route('admin.vehicle.destroy',['id'=>$vehicle->vehicletype_id] )}}" class="btn btn-danger" style="background-color:red;">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" align="center">No Information</td>
            </tr>
        @endforelse
     </table>
    <br>
       
    </div>
    <div class="card" style="width: 10%; float:right">
        <a href="{{route('admin.vehicle.create')}}" class="btn btn-primary">Add</a>
    </div>
@endsection
