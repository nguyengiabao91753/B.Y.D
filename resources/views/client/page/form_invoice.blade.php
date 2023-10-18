@extends('client.app')
@section('title','Home')
@push('css')
<link href="{{asset('client/www.cssscript.com/demo/sticky.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('client/css/home-page.css')}}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/color.css') }}">
@endpush

@push('js')
    <script src="{{ asset('client/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('client/assets/js/preloader.js') }}"></script>
@endpush

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<br><br><br><br>
<div class="container">
        <form class="checkout-meta donate-page" method="post" action="{{route('invoice.store')}}">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <h3>Invoice Form</h3>
                        <div class="col-lg-12">
                            <br>
                            <input type="text" name="contract_id" id="" value="{{$contract->id}}" hidden>
                            <label style="margin-left:10px">Insurance Name</label>
                            
                            <input type="text" name="" id="" value="{{$insurance->policy->name}}" disabled>
                            <br><br>
                            <label style="margin-left:10px">Due Date</label>
                            <input type=""  name="duedate" value="{{ date('Y/m/d', strtotime($contract->enddate)) }}" >
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5">

                <div class="col-lg-6">
                    <div class="checkout-side">
                        <button class="button" type="submit">Procced to checkout</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection