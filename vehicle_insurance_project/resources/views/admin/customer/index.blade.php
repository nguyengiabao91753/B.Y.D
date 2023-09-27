@extends('admin.app')

@section('content')
    <link rel="stylesheet" href="{{asset ('adminstrators/css/style.css')}}">
    <div class="card">
        <div class="card-header">
                <h1 style="color: brown;">Customers-Users</h1>
        </div>
    </div>

    <div class="card-body">
     <table class="table table-borderd table-sm text-center" style="background-color:azure;">
        <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Phone</th>
           <th>Address</th>
           <th>Actions</th>     
        </tr>
        @forelse($customers as $customer)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$customer->firstname.' '.$customer->lastname}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->address}}</td>
                <td>
                <a href="{{route('admin.customer.edit',['id'=>$customer->customer_id] )}}}" class="btn btn-primary">Edit</a>
                <a href="{{route('admin.customer.destroy',['id'=>$customer->customer_id] )}}}" class="btn btn-primary" style="background-color:red;">Delete</a>
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
        <a href="{{route('admin.customer.create')}}" class="btn btn-primary">Add</a>
    </div>
@endsection
