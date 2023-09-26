@extends('admin.app')

@section('content')
    <link rel="stylesheet" href="{{asset ('adminstrators/css/style.css')}}">
    <div class="card">
        <div class="card-header">
                <h1>Account-Users</h1>
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
                <td>{{ $account->CustomerID }}</td>
                <td width="200px">{{ $account->User }}</td>
                <td width="200px">{{ $account->Password }}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.accounts.create',['id'=>$account->account_id] )}}">Create</a>
                    <a class="btn btn-warning" href="{{route('admin.accounts.edit',['id'=>$account->account_id] )}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('admin.accounts.destroy',['id'=>$account->account_id] )}}">Delete</a>
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