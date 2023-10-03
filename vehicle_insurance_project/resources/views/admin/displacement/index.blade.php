@extends('admin.app')

@section('content')
    <link rel="stylesheet" href="{{asset ('adminstrators/css/style.css')}}">
    <div class="card">
        <div class="card-header">
                <h1>Engine Displacement</h1>
        </div>
    </div>

    <div class="card-body">
     <table class="table table-borderd table-sm text-center" style="background-color:azure;">
        <tr>
           <th>Displacement ID</th>
           <th>Value</th>
           <th>Actions</th>     
        </tr>
        @forelse($displacements as $displacement)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$displacement->value}}</td>
                <td>
                <a href="{{route('admin.displacement.edit',['id'=>$displacement->displacement_id] )}}}" class="btn btn-success">Edit</a>
                <a href="{{route('admin.displacement.destroy',['id'=>$displacement->displacement_id] )}}}" class="btn btn-danger" style="background-color:red;">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" align="center">No Information</td>
            </tr>
        @endforelse
     </table>
    </div>
    <div class="card" style="width: 10%; float:right">
        <a href="{{route('admin.displacement.create')}}" class="btn btn-primary">Add</a>
    </div>
@endsection
