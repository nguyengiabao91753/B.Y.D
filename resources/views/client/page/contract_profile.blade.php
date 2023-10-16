@extends('client.app')
@section('title','User Profile')
@push('css')
<link rel="stylesheet" href="{{asset('client/css/style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('client/www.cssscript.com/demo/sticky.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('client/css/home-page.css')}}">
@endpush

@push('js')
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>
@endpush

@section('content')

@if($errors->any())
    <div class="box1" style="background-color: #E3242B;">
        <h5><i></i> Alert!</h5>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif
<form method="post" action="">
    @csrf
    <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4">
                User Profile
            </h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active"
                                href="{{ route('profile.show') }}">General</a>
                            <a class="list-group-item list-group-item-action" 
                                href="{{ route('profile.edit',['id'=> $customer->id]) }}">Change password</a>
                            <a class="list-group-item list-group-item-action"
                                href="{{ route('profile.contract_user.') }}">Contract</a>
                        </div>   
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <div class="card-body media align-items-center">
                                    <img src="#" alt
                                        class="d-block ui-w-80">
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" class="form-control" placeholder="Enter password" >
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Enter password" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
    </div>
</form>
@endsection