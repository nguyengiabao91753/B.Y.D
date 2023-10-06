<header class="header">
        <nav class="nav">
            <div class="logo">
                <a href="{{ route('home')}}s"><img src="{{asset('client/img/SAFE_CARZ.png')}}" alt=""></a>
            </div>
            <div class="container">
                <ul class="item">
                    <li class="item"><a href="{{ route('home')}}">Home</a></li>
                    <li class="item"><a href="">Car Insurance</a></li>
                    <li class="item"><a href="asset('client/bike-insurance-types.blade.php')">Bike Insurance</a></li>
                    <li class="item"><a href="{{ route('about')}}">About Us</a></li>
                    <li class="item"><a href="{{ route('contact_us.index')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="icon">     
                <ul class="ul"> 
                    <!-- <li class="icon"><a href="asset('client/"><i class="fab fa-facebook"></i></a></li>
                    <li class="icon"><a href="asset('client/"><i class="fab fa-google-plus"></i></a></li>
                    <li class="icon"><a href="asset('client/"><i class="fab fa-twitter"></i></a></li> -->
                    <li style="list-style-type: none;"><a class="btn5"  href="{{ route('login')}}">Login</a></li>
                    <li style="list-style-type: none;"><a class="btn6" href="{{ route('register')}}">Register</a></li>
                </ul>
            </div> 
        </nav>
    </header>