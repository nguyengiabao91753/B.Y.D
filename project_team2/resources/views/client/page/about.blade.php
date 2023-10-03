@extends('client.app')
@section('title','About Us')

@push('css')
    <link rel="stylesheet" href="{{asset('client/css/about-us.css')}}">
@endpush

@push('js')
    <script type="module" src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
    <script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
    <script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>  
@endpush

@section('content')
<div class="containerr">
    <div class="about">
        <h1>About Us </h1>   
       </div>
       <div class="text">
           <h1>SAFE CARZ</h1>
           <p>Safe Carz Limited (SCZL) is one of the largest dedicated Motor Insurance Company in Pakistan. SCZL is a
               progressive and a technology-driven company providing innovative Insurance solutions. SCZL is the
               fastest growing Motor Insurance operator in the country.
               Incorporated in 2005, and beginning operations in 2006, the company is registered with, and supervised
               by, the Securities and Exchange Commission of Pakistan (SECP). The company is rated “A+” (having Stable
               Outlook) by JCR-VIS Credit Rating Co. Limited and Pakistan Credit Rating Agency (PACRA). The Company’s
               paid-up capital is in excess of Pak- Rs. 2.71 Billion.
               <br>
               <br>
               <b>SCZL has a vision of providing any kind of protection through insurance to everyone.</b>
               <br>
               <br>
               Safe Carz Limited has largest Insurance branch networks across Pakistan (over 1200+ branches in 100+
               countries).
               Safe Carz Limited (SCZL) is currently providing need-based financial protection to more than 4000
               corporate clients and over 670,000+ Individual Insurance members. Safe Carz Limited has around 1200+
               prominent offices across the world to provide best service to Insurance members.
               Safe Carz Limited is recipient of several domestic and international awards and nominations including,
               ‘Best Insurance Company’ Award from FPCCI, ‘Brand of the Year’ at the FPPCI Awards in Karachi, ‘Best
               Insurance Operator’ by IFN Awards in ‘Best Insurance Operator in Pakistan’ award at the International
               Insurance Summit London and ‘Best Insurance Company in Pakistan’ for the year at ‘RTC Insurance, Banking
               & Finance Awards’ ceremony in Islamabad.
           </p>
       </div>
@endsection