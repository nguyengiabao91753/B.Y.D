<header class="header">
        <nav class="nav">
            <div class="logo">
                <a href="<?php echo e(route('home')); ?>s"><img src="<?php echo e(asset('client/img/SAFE_CARZ.png')); ?>" alt=""></a>
            </div>
            <div class="container">
                <ul class="item">
                    <li class="item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="item"><a href="">Car Insurance</a></li>
                    <li class="item"><a href="asset('client/bike-insurance-types.blade.php')">Bike Insurance</a></li>
                    <li class="item"><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                    <li class="item"><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                </ul>
            </div>
            <div class="icon">     
                <ul class="ul"> 
                    <!-- <li class="icon"><a href="asset('client/"><i class="fab fa-facebook"></i></a></li>
                    <li class="icon"><a href="asset('client/"><i class="fab fa-google-plus"></i></a></li>
                    <li class="icon"><a href="asset('client/"><i class="fab fa-twitter"></i></a></li> -->
                    <li style="list-style-type: none;"><a class="btn5"  href="<?php echo e(route('login')); ?>">Login</a></li>
                    <li style="list-style-type: none;"><a class="btn6" href="<?php echo e(route('register')); ?>">Register</a></li>
                </ul>
            </div> 
        </nav>
    </header><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/client/layout/navbar.blade.php ENDPATH**/ ?>