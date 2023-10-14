@extends('client.app')
@section('title','contact_us')
@section('action', 'contact')

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
            <h3>Vui lòng chọn công ty bảo hiểm bạn muốn đăng ký</h3><br>
            @if($errors->any())
            <div class="session">
                <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Alert!</h5> -->
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </div>
            @endif
            @if(Session::has('success'))
            <div class="session">
                <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     <h5><i class="icon fas fa-check"></i> Alert!</h5> -->
                {{Session::get('success')}}
            </div>
            @endif
        </div>
        <h1 class="pre1">ĐĂNG KÍ MUA </h1>
    </div>
    <div class="flex">
        <div class="w-100">
            <div class="form">
                <form method="post" action="{{ route('contact_us.store') }}">
                    @csrf
                    <!-- Default box -->
                    <div style="text-align: center;">
                        <div>Loại Xe </div>
                        <input type="text" class="form-control" placeholder="Enter first Name" name="firstname" value="{{ old('firstname')}}" autofocus />
                    </div>
                    <div style="text-align: center;">
                        <div>Ngày bắt đầu hiệu lực </div>
                        <input type="text" class="form-control" placeholder="Enter first Name" name="firstname" value="{{ old('firstname')}}" autofocus />
                    </div>
                    <div style="text-align: center; with: 500px;" >
                        <div>Phí bảo hiểm TNDS xe máy bắt buộc </div>
                        <input type="text" class="form-control" placeholder="Enter first Name" name="firstname" value="{{ old('firstname')}}" autofocus />
                    </div>
            </div>
        </div>
        <div class="w-100">
            <div class="form">
                <div style="text-align: center;">
                    <div>Thời Hạn Bảo Hiểm </div>
                    <input type="text" class="form-control" placeholder="Enter first Name" name="firstname" value="{{ old('firstname')}}" autofocus />
                </div>
                <div style="text-align: center;">
                    <div>Ngày kết thúc hiệu lực </div>
                    <input type="text" class="form-control" placeholder="Enter first Name" name="firstname" value="{{ old('firstname')}}" autofocus />
                </div>
                    <div class="btn" >
                        <button type="submit">Send Enquiry</button>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection