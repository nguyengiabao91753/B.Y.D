@extends('client.app')
@section('title','About Us')

@push('css')
<link rel="stylesheet" href="{{asset('client/css/3t-bike-insurance-form.css')}}">
@endpush

@push('js')
<script type="module" src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
@endpush

@section('content')
<main class="main">
    <!--================================================ Vector ==============================================-->

    <div class="vector"> <img src="{{asset('client/img_1/3T-old%20bike.jpg')}}" alt=""></div>

    <!--=========================================== Heading========================================= -->

    <h1 class="heading"> What is 3T-old Motorcycles Insurence ?</h1>
    <h2 class="info">Older Motorcycles have history, and they come with little quirks that only you know about. So it's no surprise that old Motorcycles can have unique insurance needs.
        <br> <br>
        With this in mind, SafeCarz Insurance has designed 3T-old Motorcycles Insurance with the lowest premium rate of 1.125% net of Insurance estimated value.
        <br>It can provide coverage if your vehicle is damaged in one of these situations
    </h2>
    <br>
    <!--============================================= Points=============================================== -->
    <h2 class="points">
        <div class="p1"> <span style="color: #ff4e00;">&#10003;</span>Fire, external explosion, self-ignition, lightning </div>
        <br>
        <div class="p1"><span style="color: #ff4e00;">&#10003;</span>Riot, strike, terrorism </div>
        <br>
        <div class="p1"><span style="color: #ff4e00;">&#10003; </span>Flood, hail, wind </div>
        <br>
        <div class="p1"> <span style="color: #ff4e00;">&#10003;</span> Earthquake or other convulsion of nature </div>
    </h2>


    <!--========================================= mainbox/ ==================================================-->

    <div id="box011">
        <div id="box00">
            <div id="circle1"></div>
            <div id="circle2"></div>
        </div>
        <div class="icon00">
            <div class="f1">1</div>
        </div>
        <div class="line">

        </div>
        <div class="icon01">
            <div class="f2">2</div>

        </div>
        <!--========================================== first drop down======================================== -->
        <div class="carbrand">
            <select name="" id="" style="width: 20rem; height: 3rem ; font-size: medium ; border-radius: 2rem;text-align: center;" ;>
                <option value="All Cars">All Motorcycles </option>
                <option value="Yamaha>">Yamaha</option>
                <option value="Honda">Honda</option>
                <option value="Kawasaki">Kawasaki</option>
                <option value="Suzuki">Suzuki</option>
                <option value="KTM">KTM</option>
            </select>
        </div>
        <!-- ===========================================second drop down========================================== -->
        <div class="carmodel">
            <select name="" id="" style="width: 20rem; height: 3rem ; font-size: medium ; border-radius: 2rem;text-align: center;" ;>
                <option value="All Models">All Models </option>
                <option value="1970-1980">1970-1980</option>
                <option value="1981-1990">1981-1990</option>
                <option value="1990-2000">1991-2000</option>
                <option value="2001-2010">2001-2010</option>
                <option value="2011-2021">2011-2021</option>
            </select>
        </div>
        <!--================================================== third drop down ================================================-->
        <div class="Manufacturing">
            <select name="" id="" style="width: 20rem; height: 3rem ; font-size: medium ; border-radius: 2rem;text-align: center;" ;>
                <option value="Manufacturing Year ">Manufacturing Year </option>
                <option value="1970-1980">1970-1980</option>
                <option value="1981-1990">1981-1990</option>
                <option value="1990-2000">1991-2000</option>
                <option value="2001-2010">2001-2010</option>
                <option value="2011-2021">2011-2021</option>
            </select>
        </div>
        <!--======================================================= forth drop down ===========================================-->
        <div class="pkr">
            <select name="" id="" style="width: 20rem; height:3rem ; font-size: medium ; border-radius: 2rem; text-align: center;" ;>
                <option value="Current Value(PKR)">Current Value(PKR) </option>
                <option value="100k-500k">50k-100k</option>
                <option value="500k-1M">100k-300k</option>
                <option value="1M-20M">300k-800k</option>
                <option value="20M-40M">800k-1M</option>
                <option value="40M-Above">1M-Above</option>
            </select>
        </div>
        <!--====================================================== NEXT BUTTON WITH STYLING======================================= -->
        <div class="container">
            <div class="item1">
                <div class="btn1">
                    <a href="3t-bike-insurance-form-1.html">NEXT</a>
                </div>
            </div>
        </div>
</main>
@endsection