@extends('client.app')
@section('title','About Us')

@push('css')
<link rel="stylesheet" href="{{asset('client/css/comprehensive-car-isnurance-form.css')}}">
@endpush

@push('js')
<script type="module" src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
@endpush

@section('content')
<main class="main">
    <!-- ==============================================================Vector=============================================== -->
    <div class="vector"> <img src="{{asset('client/img_1/vector.png')}}" alt=""></div>
    <!--=================================================== Heading =======================================================-->
    <h1 class="heading"> What is Comprehensive Car Insurence?</h1>
    <h2 class="info">Comprehensive is a coverage that helps pay to replace or repair your vehicle if it's stolen <br> or damaged in an incident that's not a collision.Comprehensive, sometimes called <br> "other than collision" coverage, typically covers damage from fire,vandalism or falling object<br>(like trees,hail),
        <br> <br>
        Comprehensive coverage can help protect you even if are not in the crash.
        <br>It can provide coverage if your vehicle is damaged in one of these situations
    </h2>
    <br>
    <!--========================================================= Points =====================================================-->
    <h2 class="points">
        <div class="p1"> <span style="color: #ff4e00;">&#10003;</span> Storms and natural disasters</div>
        <br>
        <div class="p1"><span style="color: #ff4e00;">&#10003;</span> Vandalism and theft </div>
        <br>
        <div class="p1"><span style="color: #ff4e00;">&#10003; </span>Broken or shattered windows and windshield </div>
        <br>
        <div class="p1"> <span style="color: #ff4e00;">&#10003;</span> Damaged caused by animals </div>
        <br>
        <div class="p1"> <span style="color: #ff4e00;">&#10003;</span> Damaged caused by falling object </div>
    </h2>
    <!--============================================================== mainbox/======================================================== -->
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

        <!-- =======================================================first drop down======================================================= -->
        <div class="carbrand"> <select name="" id="" style="width: 20rem; height: 3rem; font-size: medium; border-radius: 2rem;text-align: center;" ;>
                <option value="All Cars">All Cars </option>
                <option value="Toyota>">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="KIA">KIA</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Hyundai">Hyundai</option>
            </select>
        </div>
        <!--=========================================================== second drop down =====================================================-->
        <div class="carmodel"> <select name="" id="" style="width: 20rem; height: 3rem; font-size: medium ;border-radius: 2rem;text-align: center;" ;>
                <option value="All Models">All Models </option>
                <option value="1970-1980">1970-1980</option>
                <option value="1981-1990">1981-1990</option>
                <option value="1990-2000">1991-2000</option>
                <option value="2001-2010">2001-2010</option>
                <option value="2011-2021">2011-2021</option>
            </select>
        </div>
        <!--========================================================== third drop down============================================= -->
        <div class="Manufacturing"> <select name="" id="" style="width: 20rem; height: 3rem ; font-size: medium;border-radius: 2rem;text-align: center;" ;>
                <option value="Manufacturing Year ">Manufacturing Year </option>
                <option value="1970-1980">1970-1980</option>
                <option value="1981-1990">1981-1990</option>
                <option value="1990-2000">1991-2000</option>
                <option value="2001-2010">2001-2010</option>
                <option value="2011-2021">2011-2021</option>
            </select>
        </div>
        <!-- ==============================================================forth drop down ====================================================-->
        <div class="pkr"> <select name="" id="" style="width: 20rem; height: 3rem ; font-size: medium; border-radius: 2rem; text-align: center;" ;>
                <option value="Current Value(PKR)">Current Value(PKR) </option>
                <option value="100k-500k">100k-500k</option>
                <option value="500k-1M">500k-1M</option>
                <option value="1M-20M">1M-20M</option>
                <option value="20M-40M">20M-40M</option>
                <option value="40M-Above">40M-Aboveeeeeee</option>
            </select>
        </div>
        <!-- =========================================================NEXT BUTTON WITH STYLING ============================================-->
        <div class="container">
            <div class="item1">
                <div class="btn1">
                    <a href="comprehensive-car-isnurance-form-1.html">NEXT</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection