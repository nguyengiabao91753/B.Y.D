@extends('client.app')
@section('title','Register')
@push('css')
<link rel="stylesheet" href="{{asset('client/css/sign-in-%26-sign-up.css')}}">
@endpush

@push('js')
<script type="module" src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
@endpush

@section('content')

<div class="container4">
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <h5><i></i>Alert!</h5>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

    <fieldset class="box1">
        <legend>Safe carz limited</legend>
        <form action=" " method="POST">
            @csrf
            <h1 style="text-align: center; color: gray;"><i class="fas fa-sign-in-alt"></i> Login Form</h1>
            <br>
            <!-- <label for="">Username :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="text" placeholder="Enter email" name="email_client">
            <br>
            <br>
            <!-- <label for="">Password :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="password" placeholder="Password..." name="password_client">
            <br>
            <br>
            <button class="btn1">Sign In</button>
            <a id="b2" href="{{route('register')}}"> Create new account</a>
        </form>
    </fieldset>
</div>
<!-- Side headings -->
<div class="container2">
    <h1> BE THE INSURED &</h1>
    <h2>SECURE</h2>
    <h3>YOUR CAR ACCIDENTS</h3>
    <P> <b> SAFE CARZ LIMITED</b> company provide you various
        car insurance </P>
    <br>
    <br>
    <a href="{{route('about')}}">Read more <i class="fas fa-book-open"></i></a>
</div>
@endsection