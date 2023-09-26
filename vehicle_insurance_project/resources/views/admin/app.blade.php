@include('admin.layout.header')

<body>
    @include('admin.layout.navigation')
    @if ($success = Session::get('success'))
    <div class="alert-info">
        <strong>{{ $success }}</strong>
    </div>
    @endif
    @yield('content')
</body>
@include('admin.layout.footer')
</html>