@extends('admin.app')

@section('content')
    <link rel="stylesheet" href="{{asset ('adminstrators/css/style.css')}}">
    <div class="card">
        <div class="card-header">
                <h1>Customers-Users</h1>
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
                <td>{{$customer->FirstName.' '.$customer->LastName}}</td>
                <td>{{$customer->Email}}</td>
                <td>{{$customer->Phone}}</td>
                <td>{{$customer->Address}}</td>
                <td>
                <a href="{{route('admin.customer.edit',['id'=>$customer->CustomerID] )}}}" class="btn btn-primary">Edit</a>
                <a href="{{route('admin.customer.destroy',['id'=>$customer->CustomerID] )}}}" class="btn btn-primary" style="background-color:red;">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" align="center">No Information</td>
            </tr>
        @endforelse
     </table>
    </div>
@endsection
