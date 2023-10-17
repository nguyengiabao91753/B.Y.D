@extends('client.app')
@section('title','Plan Insurance')

@push('css')
<link rel="stylesheet" href="{{asset('client/css/all-insurance-plans.css')}}">
@endpush

@push('js')
<script type="module" src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
@endpush

@section('content')
<div class="heading1">
    <div class="heading1-top">
        <h1>We Received Your Request</h1>
        <h4>Our team will contact you as soon as possible</h4>
    </div>
    <div class="tick">
        <img src="{{asset('client/img/tick.jpg')}}" alt="">
    </div>
</div>


<div class="heading">
    <div class="heading-top">
        <h1>Showing {{count($insurance)}} Plans</h1>
    </div>
</div>

<!-- WE RECIVED YOUR REQUEST ENDS -->


<!-- ISNURANCE CARDS PLANS STARTS -->
@foreach($insurance as $item)
<div class="container1">
    <div class="items">
        <div class="item1">
            @php
            $image = $item->provider->image
            @endphp
            <img src="{{asset('uploads/'.$image)}}" alt="">
            <p>{{$item->policy->name}}</p>
            <div class="item3">

                <p>Rate</p>
                <p>Installment Plan</p>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1">Add Tracker</label>
            </div>
        </div>

        <div class="item2">
            <p>Total</p>
             <?php
                $price = $item->price;
                $sale = $price * 80 / 100;
                $rate = $item->rate;
                $sale_rate = round($rate * 80 / 100, 1);
                ?>
            <h2>${{$sale}}</h2>
            <h4> <del>${{$item->price}}</del> </h4>
            <div class="item4">
                <p>{{$sale_rate}}% <del>{{$item->rate}}%</del></p>
                <p>${{$item->price}} / month</p>
                <br>
            </div>
            <div class="item5">
                <h2>20% OFF</h2>
                <br>
                <a href="{{route('contract_user.show',['id'=>$item->id])}}">BUY</a>
                @if (Auth::check())
                @else
                <a href="{{route('showLoginClient')}}">BUY</a>
                @endif

            </div>
        </div>
    </div>


</div>
@endforeach


<!-- ISNURANCE CARDS PLANS ENDS -->

<!-- DISCLAIMER STARTS -->

<div class="paragraph">
    <div class="disclaimer">
        <p><strong>Disclaimer</strong>:Safe Carz Pvt Ltd is authorized distributor of insurance policies in Pakistan for various insurance companies and shall not assume any responsibility for policy issuance, handling of claims and payment of indemnity under the policy or otherwise. Nothing on this site should be construed as a solicitation, offer, advice, recommendation, or any other service.</p>
    </div>
</div>
@endsection