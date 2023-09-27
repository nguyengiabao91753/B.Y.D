@extends('admin.app')

@section('content')
    <link rel="stylesheet" href="{{asset ('adminstrators/css/style.css')}}">
    <div class="card">
        <div class="card-header">
                <h1 style="color: brown;">Account-Users</h1>
        </div>
    </div>
    <div class="card-body">
     <table class="table table-borderd table-sm text-center" style="background-color:azure;">
        <tr>
           <th>AccountID</th>
           <th>CustomerID</th>
           <th>User</th>
           <th>Password</th>
           <th>Actions</th>     
           @forelse ($accounts as $account)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $account->customer_id }}</td>
                <td>{{ $account->user}}</td>
                <td>{{ $account->password }}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('admin.account.edit',['id'=>$account->account_id] )}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('admin.account.destroy',['id'=>$account->account_id] )}}">Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" align="center">No Information</td>
            </tr>
            @endforelse
        </tr>
        <td><a class="btn btn-primary" href="{{route('admin.account.create')}}">Create</a></td>
     </table>
    </div>
@endsection