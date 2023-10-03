@extends('admin.app')

@section('content')
    <link rel="stylesheet" href="{{asset ('adminstrators/css/style.css')}}">
    <div class="card">
        <div class="card-header">
                <h1 style="color:black">Invoice</h1>
        </div>
    </div>

    <div class="card-body">
     <table class="table table-borderd table-striped text-center" style="background-color:azure;">
        <tr>
           <th>Invoice ID</th>
           <th>Contract ID</th>
           <th>Amount</th>
           <th>Date</th>
           <th>Actions</th>          
        </tr>
        @forelse($invoices as $invoice)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$invoice->contracts_id}}</td>
                <td>{{$invoice->Amount}}</td>
                <td>{{$invoice->DueDate}}</td>
                <td>
                <a href="{{route('admin.edit',['id'=>$invoice->invoice_id] )}}}" class="btn btn-primary">Edit</a>
                <a href="{{route('admin.destroy',['id'=>$customer->CustomerID] )}}}" class="btn btn-primary" style="background-color:red;">Delete</a>
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