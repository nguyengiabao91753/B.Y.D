@extends('client.app')
@section('title','About Us')

@push('css')
<link rel="stylesheet" href="{{asset('client/css/all-insurance-plans.css')}}">
@endpush

@push('js')
<script type="module" src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
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
        <h1>Showing 6 Plans</h1>
    </div>
</div>



<div class="container1">
    <div class="items">
        <div class="item1">
            <img src="{{asset('client/img/Askari_margin-0.png')}}" alt="">
            <p>3T Insurance</p>
            <div class="item3">
                <p>Rate</p>
                <p>Installment Plan</p>
                <p>Workshops Available</p>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label for="vehicle1">Add Tracker Rs 10,500</label>
            </div>
        </div>

        <div class="item2">
            <p>Total</p>
            <h2>Rs 85,000</h2>
            <h4> <del>Rs 125,000</del> </h4>
            <div class="item4">
                <p>1.7% <del>2.5%</del></p>
                <p>Rs. 14167 / month</p>
                <p>296 Workshops</p>
            </div>
            <div class="item5">
                <h2>32% OFF</h2>
            </div>
        </div>
    </div>

    <div class="items">
        <div class="item1">
            <img src="{{asset('client/img/Jubilee_margin-0.png')}}" alt="">
            <p>3T Insurance</p>
            <div class="item3">
                <p>Rate</p>
                <p>Installment Plan</p>
                <p>Workshops Available</p>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Bike">
                <label for="vehicle2">Add Tracker Rs 10,500</label>
            </div>

        </div>



        <div class="item2">

            <p>Total</p>
            <h2>Rs 117,000</h2>
            <h4> <del>Rs 130,000</del> </h4>
            <div class="item4">
                <p>1.7% <del>2.5%</del></p>
                <p>Rs. 17160 / month</p>
                <p>500 Workshops</p>
            </div>
            <div class="item5">
                <h2>10% OFF</h2>
            </div>
        </div>
    </div>
</div>

<div class="container1">
    <div class="items">
        <div class="item1">
            <img src="{{asset('client/img/EFU_margin-00.png')}}" alt="">
            <p>3T Insurance</p>
            <div class="item3">
                <p>Rate</p>
                <p>Installment Plan</p>
                <p>Workshops Available</p>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="Bike">
                <label for="vehicle3">Add Tracker Rs 10,500</label>
            </div>
        </div>

        <div class="item2">
            <p>Total</p>
            <h2>Rs 90,000</h2>
            <h4> <del>Rs 125,000</del> </h4>
            <div class="item4">
                <p>1.7% <del>2.5%</del></p>
                <p>Rs. 15164 / month</p>
                <p>315 Workshops</p>
            </div>
            <div class="item5">
                <h2>30% OFF</h2>
            </div>
        </div>
    </div>

    <div class="items">
        <div class="item1">
            <img src="{{asset('client/img/UIC_margin-00.png')}}" alt="">
            <p>3T Insurance</p>
            <div class="item3">
                <p>Rate</p>
                <p>Installment Plan</p>
                <p>Workshops Available</p>
                <input type="checkbox" id="vehicle4" name="vehicle4" value="Bike">
                <label for="vehicle4">Add Tracker Rs 10,500</label>
            </div>

        </div>

        <div class="item2">

            <p>Total</p>
            <h2>Rs 86,000</h2>
            <h4> <del>Rs 125,000</del> </h4>
            <div class="item4">
                <p>1.7% <del>2.5%</del></p>
                <p>Rs. 14267 / month</p>
                <p>296 Workshops</p>
            </div>
            <div class="item5">
                <h2>29% OFF</h2>
            </div>
        </div>
    </div>
</div>

<div class="container1">
    <div class="items">
        <div class="item1">
            <img src="{{asset('client/img/TPL_margin-0.png')}}" alt="">
            <p>3T Insurance</p>
            <div class="item3">
                <p>Rate</p>
                <p>Installment Plan</p>
                <p>Workshops Available</p>
                <input type="checkbox" id="vehicle5" name="vehicle5" value="Bike">
                <label for="vehicle5">Add Tracker Rs 10,500</label>
            </div>
        </div>

        <div class="item2">
            <p>Total</p>
            <h2>Rs 92,000</h2>
            <h4> <del>Rs 125,000</del> </h4>
            <div class="item4">
                <p>1.7% <del>2.5%</del></p>
                <p>Rs. 17167 / month</p>
                <p>202 Workshops</p>
            </div>
            <div class="item5">
                <h2>22% OFF</h2>
            </div>
        </div>
    </div>

    <div class="items">
        <div class="item1">
            <img src="{{asset('client/img/Pak-Qatar_margin-00.png')}}" alt="">
            <p>3T Insurance</p>
            <div class="item3">
                <p>Rate</p>
                <p>Installment Plan</p>
                <p>Workshops Available</p>
                <input type="checkbox" id="vehicle6" name="vehicle6" value="Bike">
                <label for="vehicle6">Add Tracker Rs 10,500</label>
            </div>

        </div>

        <div class="item2">

            <p>Total</p>
            <h2>Rs 90,000</h2>
            <h4> <del>Rs 125,000</del> </h4>
            <div class="item4">
                <p>1.7% <del>2.5%</del></p>
                <p>Rs. 14167 / month</p>
                <p>300 Workshops</p>
            </div>
            <div class="item5">
                <h2>25% OFF</h2>
            </div>
        </div>
    </div>
</div>
<div class="paragraph">
    <div class="disclaimer">
        <p><strong>Disclaimer</strong>:Safe Carz Pvt Ltd is authorized distributor of insurance policies in Pakistan for various insurance companies and shall not assume any responsibility for policy issuance, handling of claims and payment of indemnity under the policy or otherwise. Nothing on this site should be construed as a solicitation, offer, advice, recommendation, or any other service.</p>
    </div>
</div>

@endsection