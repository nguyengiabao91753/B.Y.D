@include('client.layout.header')
<body>
    <!-- Navigation -->
    @include('client.layout.navigation')

    <!-- Banner -->
    @include('client.layout.banner')

    <!-- Content-->
    @yield('content')
    <!-- Footer -->
    @include('client.layout.footer')
    
</body>
</html>
