@extends('client.app')
@section('title','Motobike Insurance')

@push('css')
<link href="{{asset('client/www.cssscript.com/demo/sticky.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('client/css/car-%26-bike-insurance-types.css')}}">
@endpush

@section('content')
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
    <div class="boxes">
        <div class="box1">
            <p>Comprehensive Bike Insurance</p>
            <img src="{{asset('client/img/comprehensive-bike-resize.jpg')}}" alt="">
        </div>
        <div class="box-p">
            <p>A Comprehensive Bike isnurance policy is the most ectensive Bike insurance cover under which an insurance company is liable to pay for financial liabilities incurred towards a third party as well as for the own-damages sustained by the insured's bike. In addition to road accidents, the event of natural calamities, man-made disasters, self-ignition or lighting, explosion, fire, theft, etc</p>
        </div>
        <div class="box-btn">
            <a href="comprehensive-bike-isnurance-form.html">View Insurance</a>
        </div>
    </div>

    <div class="boxes">
        <div class="box1">
            <p>Third-Party Bike Insurance</p>
            <img src="{{asset('client/img/third-party-bike-resize.jpg')}}" alt="">
        </div>
        <div class="box-p">
            <p>A third-party bike insurance plan provides coverage against any legal liability arising out injuries or a third-party when the policyholder is at fault. it covers damages and injuries caused by the insured vehicle, to a third-party person or property</p>
        </div>
        <div class="box-btn1">
            <a href="third-party-bike-insurance-form.html">View Insurance</a>
        </div>
    </div>

    <div class="boxes">
        <div class="box1">
            <p>3T Bike Insurance</p>
            <img src="{{asset('client/img/3T-bike-resize.jpg')}}" alt="">
        </div>
        <div class="box-p">
            <p>This is an economical cover designed for mainly for vehicles owners who understand their vehicle either low mileage on road or is too old for spending on wide cover, 3t insurance policy has limit ectent of own damage cover. This policy covers insured for Toral Loss of vehicle, Theft and / or Third Party Liability arising out of use of vehicle.</p>
        </div>
        <div class="box-btn2">
            <a href="3t-bike-insurance-form.html">View Insurance</a>
        </div>
    </div>
</div>
@endsection