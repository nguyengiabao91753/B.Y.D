

@include('admin.layout.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('adminstrators/image/BYD.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
  @include('admin.layout.navigation')
  @include('admin.layout.sidebar')
  @if ($success = Session::get('success'))
    <div class="alert-info">
        <strong>{{ $success }}</strong>
    </div>
  @endif
  @yield('content')
  @include('admin.layout.footer')
