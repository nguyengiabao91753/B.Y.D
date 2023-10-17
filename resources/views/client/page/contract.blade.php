@extends('client.app')
@section('title','contract_us')
@section('action', 'contact')

@push('css')
<link rel="stylesheet" href="{{asset('client/css/contact-us.css')}}">
<link rel="stylesheet" href="{{asset('client/css/contact-nav.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('client/font/css/all.min.html')}}"> 
@endpush 
@push('js') <script type="module" src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"> </script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script>
<script nomodule src="{{asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')}}"></script> 
@endpush
@section('content') <div class="container-contact">
    <div class="contact">
        <h3>Vui lòng chọn công ty bảo hiểm bạn muốn đăng ký</h3><br>
        <h1 class="pre1">ĐĂNG KÍ MUA </h1>
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
</div>

<form method="post" action="{{ route('admin.contract.store') }}">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
            <div class="col-md-6">
                    <label for="enddate" >EndDate</label>
                    <input type="date" id="duedate" class="form-control" name="enddate" min="2018-09-24" max="2025-10-20"
                            placeholder="Enter Date" value="{{ old('duedate')}}">
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>

@endsection