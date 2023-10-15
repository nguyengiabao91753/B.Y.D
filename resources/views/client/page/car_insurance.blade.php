@extends('client.app')
@section('title','Car Insurance')

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

    <!-- DEFINATION OF CAR INSURANCES ENDS -->

     <!-- TYPES OF CAR INSURANCES STARTS -->

    <div class="box-heading">
        <h1>Types of  Car Insurances</h1>
    </div>

    <div class="container1">
    @foreach($policy as $item)
    <div class="boxes">
            <div class="box1">
                <p>{{ $item->name}}</p>
                <img src="{{asset('uploads/'.$item->image)}}" alt="">
            </div>
            <div class="box-p">
                <p>{{ $item->description }}</p>
            </div>
            <br>
            <div class="box-btn">
                <a href="{{route('form_insurance',['id'=>$item->id])}}">View Insurance</a>
            </div>
        </div>
    @endforeach
        <!-- <div class="boxes">
            <div class="box1">
                <p>Comprehensive Car Insurance</p>
                <img src="{{asset('client/img/Comprehensive-car-insurance-resize.png')}}" alt="">
            </div>
            
            <div class="box-p">
                <p>A Comprehensive Car isnurance policy is the most ectensive car insurance cover under which an insurance company is liable to pay for financial liabilities incurred towards a third party as well as for the own-damages sustained by the insured's car. In addition to road accidents, the event of natural calamities, man-made disasters, self-ignition or lighting, explosion, fire, theft, etc</p>
            </div>
            <div class="box-btn">
                <a href="comprehensive-car-isnurance-form.html">View Insurance</a>
            </div>
        </div>

        <div class="boxes">
            <div class="box1">
                <p>Third-Party Car Insurance</p>
                <img src="{{asset('client/img/3rd-party-car-resize.jpg')}}" alt="">
            </div>
            <div class="box-p">
                <p>A third-party car insurance plan provides coverage against any legal liability arising out injuries or a third-party when the policyholder is at fault. it covers damages and injuries caused by the insured vehicle, to a third-party person or property</p>
            </div>
            <div class="box-btn1">
                <a href="third-party-car-insurance-form.html">View Insurance</a>
            </div>
        </div>

        <div class="boxes">
            <div class="box1">
                <p>3T Car Insurance</p>
                <img src="{{asset('client/img/3T-car-resize.jpg')}}" alt="">
            </div>
            <div class="box-p">
                <p>This is an economical cover designed for mainly for vehicles owners who understand their vehicle either low mileage on road or is too old for spending on wide cover, 3t insurance policy has limit ectent of own damage cover. This policy covers insured for Toral Loss of vehicle, Theft and / or Third Party Liability arising out of use of vehicle.</p>
            </div>
            <div class="box-btn2">
                <a href="3t-car-insurance-form.html">View Insurance</a>
            </div>
        </div> -->
    </div>
@endsection