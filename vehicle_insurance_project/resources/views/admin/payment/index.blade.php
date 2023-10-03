@extends('admin.app')
@section('content')
    <link rel="stylesheet" href="{{asset ('adminstrators/css/style.css')}}">
    <div class="card">
        <div class="card-header">
                <h1 style="color: brown;">Payment-Users</h1>
        </div>
    </div>
    <div class="card-body">
     <table class="table table-borderd table-sm text-center" style="background-color:azure;">
        <tr>
           <th>PaymentID</th>
           <th>PaymentName</th>
           <th>Actions</th>     
           @forelse ($payment as $payment)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$payment->paymentname}}</td>
                <td>
 
                    <a class="btn btn-warning" href="{{route('admin.payment.edit',['id'=>$payment->payment_id] )}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('admin.payment.destroy',['id'=>$payment->payment_id] )}}">Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" align="center">No Information</td>
            </tr>
            @endforelse
            <td>
            <a class="btn btn-primary" href="{{route('admin.payment.create')}}">Create</a>
            </td>
     </table>
    </div>
@endsection