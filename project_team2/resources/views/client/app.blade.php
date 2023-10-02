@include('client.layout.header')

<body>
    <!-- NAVBAR -->
    @inlcude('client.layout.navbar')

    <!-- MAIN TOP PIC HEADING STARTS -->
    @yield('content')

    <!-- FOOTER  -->
    @include('client.layout.footer')
</body>