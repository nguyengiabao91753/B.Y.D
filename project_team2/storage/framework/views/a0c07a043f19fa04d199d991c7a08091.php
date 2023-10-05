<?php $__env->startSection('title','Register'); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('client/css/sign-in-%26-sign-up.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script type="module" src="<?php echo e(asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')); ?>"></script>
<script nomodule src="<?php echo e(asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')); ?>"></script>
<script nomodule src="<?php echo e(asset('client/unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container4">
    <fieldset class="box1">
        <legend>Safe carz limited</legend>
        <form action="#">

            <h1 style="text-align: center; color: gray;"><i class="fas fa-sign-in-alt"></i> Login Form</h1>
            <br>
            <!-- <label for="">Username :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="text" placeholder="Enter email">
            <br>
            <br>
            <!-- <label for="">Password :</label> -->
            <input style="height: 24px; width: 80%; border-radius: 10px; box-shadow: 2px 1px 2px 1px gray;" type="password" placeholder="Password...">
            <br>
            <br>
            <button class="btn1">Sign In</button>
            <a id="b2" href="<?php echo e(route('register')); ?>"> Create new account</a>
        </form>
    </fieldset>
</div>
<!-- Side headings -->
<div class="container2">
    <h1> BE THE INSURED &</h1>
    <h2>SECURE</h2>
    <h3>YOUR CAR ACCIDENTS</h3>
    <P> <b> SAFE CARZ LIMITED</b> company provide you various
        car insurance </P>
    <br>
    <br>
    <a href="<?php echo e(route('about')); ?>">Read more <i class="fas fa-book-open"></i></a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/client/page/login.blade.php ENDPATH**/ ?>