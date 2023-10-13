@extends('client.app')
@section('title','All Vehicles Insurance')

@push('css')
<link href="{{asset('client/www.cssscript.com/demo/sticky.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('client/css/car-%26-bike-insurance-types.css')}}">
@endpush

@section('content')
<div class="heading">
    <div class="heading-items">
        <div class="heading-item">
            <h1>What is Car Insurance</h1>
        </div>
        <div class="heading-p">
            <p>Car insurance is a contract between a car owner and a general isnurance company where in the latter promises to protect the car owner from financial losses which may occur dure to an unfortunate event involving his/her car. Depending onthe scope of coverage, there are 3 types of car insurance policies - Comprehensive Car Insurance, Third-Party Car insurance and 3T Car insurance. To continue to avail the benefits of these policies, the car insurance renewal sould be processed on time by policyholders</p>
            <img src="{{asset('client/img/Car-insurance-resize.jpg')}}" alt="">
        </div>
    </div>
</div>

<!-- DEFINATION OF CAR INSURANCE ENDS -->

<!-- TYPES OF CAR INSURANCES STARTS -->

<div class="box-heading">
    <h1>Types of Car Insurances</h1>
</div>

<div class="container1">
    @foreach($policy_car as $car)
    <div class="boxes">
        <div class="box1">
            <p>{{ $car->name}}</p>
            <img src="{{asset('uploads/'.$car->image)}}" alt="">
        </div>
        <div class="box-p">
            <p>{{ $car->description }}</p>
        </div>
        <br>
        <div class="box-btn">
            <a href="{{route('form_insurance',['id'=>$car->id])}}">View Insurance</a>
        </div>
    </div>
    @endforeach
</div>

<!-- TYPES OF CAR INSURANCES ENDS -->

<!-- DEFINATION OF BIKE INSURANCES STARTS -->

<div class="heading">
    <div class="heading-items">
        <div class="heading-item">
            <h1>What is Bike Insurance</h1>
        </div>
        <div class="heading-p">
            <p>Bike insurance is a contract between a bike owner and a general isnurance company where in the latter promises to protect the bike owner from financial losses which may occur dure to an unfortunate event involving his/her car. Depending onthe scope of coverage, there are 3 types of bike insurance policies - Comprehensive Bike Insurance, Third-Party Bike insurance and 3T Bike insurance. To continue to avail the benefits of these policies, the bike insurance renewal sould be processed on time by policyholders</p>
            <img src="{{asset('client/img/bike-insurance-resize.jpg')}}" alt="">
        </div>
    </div>
</div>

<!-- DEFINATION OF CAR INSURANCES ENDS -->

<!-- TYPES OF BIKE INSURANCES STARTS -->

<div class="box-heading">
    <h1>Types of Bike Insurances</h1>
</div>

<div class="container1">
@foreach($policy_bike as $bike)
    <div class="boxes">
            <div class="box1">
                <p>{{ $bike->name}}</p>
                <img src="{{asset('uploads/'.$bike->image)}}" alt="">
            </div>
            <div class="box-p">
                <p>{{ $bike->description }}</p>
            </div>
            <br>
            
            <div class="box-btn">
                <a href="{{route('form_insurance',['id'=>$bike->id])}}">View Insurance</a>
            </div>
        </div>
    @endforeach
</div>
@endsection