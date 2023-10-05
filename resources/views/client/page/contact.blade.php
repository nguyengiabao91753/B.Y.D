@extends('client.app')
@section('title','Contact Us')

@push('css')
<link rel="stylesheet" href="{{asset('client/css/contact-us.css')}}">
<link rel="stylesheet" href="{{asset('client/css/contact-nav.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('client/font/css/all.min.html')}}">
@endpush

@push('js')
<script type="module" src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
@endpush

@section('content')
<div class="container-contact">



    <div class="contact">
        <div class="contact">

            <h2>Contact Us</h2>
            <p>If you have business inquries or other questions,please fill out the following form to contact us.Thank You

        </div>

    </div>

    <div class="flex">
        <div class="w-100">
            <div class="form">
                <h5>Get in touch with us</h5>
                <div class="flex">
                    <input placeholder="Name" autofocus />
                    <input placeholder="E-mail" autofocus />
                </div>
                <div class="flex">
                    <input placeholder="Phone number" />
                    <input placeholder="Subject" />
                </div>
                <textarea rows="10">

                </textarea>
                <div class="btn">
                    <a href="#">Send</a>
                </div>

            </div>
        </div>
        
        <div class="w-100">
            <div class="form">


                <div class="pre1">
                    <i class="fas fa-clock"></i>Business hours <br>
                    <p id="p1"><b>Mon-Set: 10am to 7am</b></p>



                </div>
                <br>


                <div class="pre2">
                    <i class="fas fa-phone-square"></i>Give us a quick call
                    <br>
                    <p2 style="font-weight: bold; font-size: 25px;">(021) 111-212-212</p2>

                </div>
                <br>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57878.127092074195!2d67.01243336922572!3d24.95308257686431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1641639684753!5m2!1sen!2s" width="100%" height="230" style="border: 1px;;" allowfullscreen="" loading="lazy"></iframe>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection