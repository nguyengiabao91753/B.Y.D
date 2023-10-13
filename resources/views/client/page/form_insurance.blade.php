@extends('client.app')
@section('title',$policy->name)

@push('css')
<link rel="stylesheet" href="{{asset('client/css/comprehensive-bike-isnurance-form.css')}}">
@endpush

@push('js')
<script type="module" src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
@endpush

@section('content')
<main class="main">
    <!-- =========================================================Vector================================================== -->
    <div class="vector"> <img src="{{asset('uploads/'.$policy->image)}}" style="width: 25rem; height: 15rem" alt=""></div>
    <!-- =========================================================Heading ===================================================-->
    <h1 class="heading"> What is {{$policy->name}}?</h1>
    <h2 class="info">Comprehensive is a coverage that helps pay to replace or repair your vehicle if it's stolen <br> or damaged in an incident that's not a collision.Comprehensive, sometimes called <br> "other than collision" coverage, typically covers damage from fire,vandalism or falling object<br>(like trees,hail),
        <br> <br>
        Comprehensive coverage can help protect you even if are not in the crash.
        <br>It can provide coverage if your vehicle is damaged in one of these situations
    </h2>
    <br>
    <!-- ============================================================Points========================================================== -->
    <h2 class="points">
        <div class="p1"> <span style="color: #ff4e00;">&#10003;</span> Storms and natural disasters</div>
        <br>
        <div class="p1"><span style="color: #ff4e00;">&#10003;</span> Vandalism and theft </div>
        <br>
        <div class="p1"> <span style="color: #ff4e00;">&#10003;</span> Damaged caused by animals </div>
        <br>
        <div class="p1"> <span style="color: #ff4e00;">&#10003;</span> Damaged caused by falling object </div>
    </h2>
    <!--=========================================================== mainbox/========================================== -->
    <form  action="{{route('plan_insurance')}}">
        <div id="box011">
            <input type="text" name="policy" id="#policy" value="{{$policy->id}}" hidden>
            <!-- =========================================first drop down ==================================-->
            <div class="carbrand"> <select name="brand"  style="width: 20rem; height: 3rem ; font-size: medium ; border-radius: 2rem; text-align: center;" ;>
                    <option value="">All Motorcycles </option>
                @foreach( $uniqueBrands as $insu_brand)
                    <option value="{{$insu_brand->brand}}">{{$insu_brand->brand}}</option>
                    @endforeach
                </select>
            </div>
            <!-- ============================================second drop down =========================================-->
            <div class="carmodel"> <select name="model"  style="width: 20rem; height: 3rem; font-size: medium ; border-radius: 2rem;text-align: center;" ;>
                    <option value="">All Models </option>
                    @foreach($uniqueModels as $insu_model)
                    <option value="{{$insu_model->model}}">{{$insu_model->model}}</option>
                    @endforeach
                </select>
            </div>
           
            <div class="pkr"> <select name="value" style="width: 20rem; height: 3rem; font-size: medium ; border-radius: 2rem; text-align: center;" ;>
                    <option value="">Current Value</option>
                    @foreach($uniqueValues as $insu_value)
                    <option value="{{$insu_value->value}}" \>{{$insu_value->value}}</option>
                    @endforeach
                </select>
            </div>
            <!--============================================= NEXT BUTTON WITH STYLING ===========================================-->
            <div id="button">
                </fieldset>
                <div class="container">
                    <div class="item1">
                        <div class="btn1">
                           <button><a>See plan</a></button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</main>



@endsection