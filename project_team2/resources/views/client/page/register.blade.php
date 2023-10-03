@extends('client.app')
@section('title','Login')

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
        <legend>SAFE CARZ LIMITED</legend>
        <form action="#">
            <h1 style="text-align: center; color: gray;"><i class="fas fa-user"></i> Create new Account</h1>
            <br>
            <!-- <label for="">First-name :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="text" placeholder="First name..." autofocus>
            <br>
            <br>
            <!-- <label for="">Last-name :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="text" placeholder="Last name...">
            <br>
            <br>
            <!-- <label for="">Enter-your-age :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="number" placeholder="Enter-your-age...">
            <br>
            <br>
            <!-- <label for="">Select-your-country :</label> -->
            <select style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" id="countries">
                <option value="pakistan">Pakistan</option>
                <option value="UK">USA</option>
                <option value="Dubai">Dubai</option>
                <option value="America">America</option>
            </select>
            <br>
            <br>
            <label for="">Gender :</label>
            Male <input type="radio" value="Male" name="gender">
            Female <input type="radio" value="Female" name="gender">
            <br>
            <br>
            <!-- <label for="">phone-Number :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="text" placeholder="Phone-number...">
            <br>
            <br>
            <!-- <label for="">Password</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="password" placeholder="Password...">
            <br>
            <br>
            <button class="btn2"> <a href="log-in.html"> Submit</a></button>
        </form>
    </fieldset>
</div>
<!-- side work -->
<div class="container2">
    <h1> BE THE INSURED &</h1>
    <h2>SECURE</h2>
    <h3>YOUR CAR ACCIDENTS</h3>
    <P> <b> SAFE CARZ LIMITED</b> company provide you various
        car insurance </P>
    <br>
    <br>
    <a href="about-us.html">Read more <i class="fas fa-book-open"></i></a>
</div>
@endsection