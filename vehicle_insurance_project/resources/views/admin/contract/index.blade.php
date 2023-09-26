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
           <th>ContractID</th>
           <th>AccountID</th>
           <th>PolicyID</th>
           <th>EndDate</th>
           <th>Actions</th>     
           @forelse ($accounts as $account)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$contract->account_id }}</td>
                <td width="200px">{{  $contract->policy_id }}</td>
                <td width="200px">{{ $contract->enddate }}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('admin.contract.create',['id'=>$contract->contract_id] )}}">Create</a>
                    <a class="btn btn-warning" href="{{route('admin.contract.edit',['id'=>$contract->contract_id] )}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('admin.contract.destroy',['id'=>$contract->contract_id] )}}">Delete</a>
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