<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('client.home')}}"><img src="{{ asset('adminstrators/image/BYD.png') }}" alt="Brand" style="width: 100px;height:40px"></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('client.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client.about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client.vehicle')}}">Vehicle Insurance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client.contact')}}">Contact Us</a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav ml-auto" style="margin: 0;">
                    <li class="nav-item" style="margin: 0;">
                        <a class="btn btn-light" href="{{route('client.login')}}">Login</a>
                    </li>
                    
                    <li class="nav-item" >               
                        <a class="btn btn-outline-secondary" href="{{route('client.register')}}" >Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>