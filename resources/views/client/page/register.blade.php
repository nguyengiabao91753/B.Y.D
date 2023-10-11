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
<div class="container3">
    <fieldset>
        <legend>B.Y.D INSURANCE</legend>
        <form method="post" action="{{ route('register') }}">
            @csrf
            <h1 style="text-align: center; color: gray;"><i class="fas fa-user"></i> Create new Account</h1>
            <br>
            <!-- <label for="">First-name :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="text" placeholder="First name..." autofocus name="firstname" value="{{ old('firstname')}}">
            <br>
            <br>
            <!-- <label for="">Last-name :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="text" placeholder="Last name..." name="lastname" value="{{ old('lastname')}}">>
            <br>
            <br>
            <!-- <label for="">Enter-your-age :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="text" placeholder="Email"  name="email" value="{{ old('email')}}">
            <br>
            <br>
            <!-- <label for="">phone-Number :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="text" placeholder="Phone-number..." name="phone" value="{{ old('phone')}}">
            <br>
            <br>
            <!-- <label for="">Password</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="password" placeholder="Password..." name="password">
            <br>
            <br>
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="password" placeholder="Confirmed Password" name="password_confirmation">
            <br>
            <br>
            <button class="btn2" type="submit">Submit</button>
            <a id="b2" href="{{route('showLoginClient')}}">Login</a>
        </form>
    </fieldset>
</div>
<!-- side work -->
<div class="container">
    @if($errors->any())
    <div class="box1" style="background-color: #E3242B;">
        <h5><i></i> Alert!</h5>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
    @endif

    @if(Session::has('error'))
    <div class="box1" style="background-color: #E3242B">
        <h5><i></i> Alert!</h5>
        {{Session::get('error')}}
    </div>
    @endif

    @if(Session::has('success'))
    <div class="box1" style="background-color: #5CB85C">
        <h5><i></i> Alert!</h5>
        {{Session::get('success')}}
    </div>
    @endif
</div>
<div class="container2">
    <h1> BE THE INSURED &</h1>
    <h2>SECURE</h2>
    <h3>YOUR CAR ACCIDENTS</h3>
    <P> <b> SAFE CARZ LIMITED</b> company provide you various
        car insurance </P>
    <br>
    <br>
    <a href="{{ route('about')}}">Read more <i class="fas fa-book-open"></i></a>
</div>
@endsection

<style>
.box1{
        width: 30%;
        text-align: center;
    }
</style>