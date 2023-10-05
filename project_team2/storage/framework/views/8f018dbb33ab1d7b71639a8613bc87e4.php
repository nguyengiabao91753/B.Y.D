<?php echo $__env->make('client.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <!-- NAVBAR -->
    <?php echo $__env->make('client.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- MAIN TOP PIC HEADING STARTS -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- FOOTER  -->
    <?php echo $__env->make('client.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body><?php /**PATH C:\xampp\htdocs\B.Y.D\project_team2\resources\views/client/app.blade.php ENDPATH**/ ?>