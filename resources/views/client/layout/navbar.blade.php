<header class="header">
    <nav class="nav" role="navigation">
        <div class="logo">
            <a href="{{ route('home')}}"><img src="{{asset('client/img/SAFE_CARZ.png')}}" alt=""></a>
        </div>
        <div class="menu-toggle">
            <button  id="mobile-menu-button" onclick="togglemenu()">&#9776; Menu</button>
        </div>
        <div class="container menu">
            <ul class="item">
                <!-- Đặt tiêu đề menu trong nút menu -->
                <li class="item"><a href="{{ route('home')}}">Home</a></li>
                <li class="item"><a href="{{ route('car_insurance')}}">Car Insurance</a></li>
                <li class="item"><a href="{{ route('bike_insurance')}}">Bike Insurance</a></li>
                <li class="item"><a href="{{ route('about')}}">About Us</a></li>
                <li class="item"><a href="{{ route('contact_us.index')}}">Contact Us</a></li>
                <!-- Các tiêu đề menu sẽ được di chuyển vào nút menu -->
            </ul>
        </div>
        <div class="icon">
            <ul class="ul">
                @auth
                <li style="list-style-type: none;"><a class="btn7" href="{{ route('logoutClient')}}">Logout</a></li>
                @else
                <li style="list-style-type: none;"><a class="btn5" href="{{ route('showLoginClient')}}">Login</a></li>
                <li style="list-style-type: none;"><a class="btn6" href="{{ route('register')}}">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>
</header>