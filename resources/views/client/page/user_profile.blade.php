
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
                            href="{{ route('profile.edit',['id'=> Auth::user()->id]) }}">Change password</a>
                        <a class="list-group-item list-group-item-action" 
                            href="{{ route('profile.edit',['id'=> $customer->id]) }}">Contract</a>
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
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control mb-1" value="{{ $customer->firstname.' '.$customer->lastname }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="{{  $customer-> firstname }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="{{  $customer-> email }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="{{  $customer-> phone }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
